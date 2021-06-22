@extends('layouts.app')


@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">مشاهده کاربر</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex ">
                    <a class="nav-link" href="{{ route('users.index') }}">بازگشت</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">نام</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th scope="row">پست الکترونیکی</th>
                    <td>{{ $user->email }}</td>
                </tr>
            @can('user-edit')
                <tr>
                    <th scope="row">ویرایش کاربر</th>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('users.edit',$user->id) }}">ویرایش کاربر</a>
                    </td>
                </tr>
            @endcan

            <tr>
                <th scope="row">نقش</th>
                <td>    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <span class="badge bg-success">{{ $v }}</span>
                        @endforeach
                    @else
                            فاقد نقش کاربری
                    @endif
                </td>
            </tr>

            @can('user-delete')
                <tr>
                    <th scope="row">حذف کاربر</th>
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('حذف کاربر', ['class' => 'btn btn-sm btn-outline-danger']) !!}
                        {!! Form::close() !!}
                        غیر قابل بازگشت!!
                    </td>
                </tr>
            @endcan

            </tbody>
        </table>
    </div>
@endsection
