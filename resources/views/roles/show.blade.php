@extends('layouts.app')


@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">مشاهده نقش</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex ">
                    <a class="nav-link" href="{{ route('roles.index') }}">بازگشت</a>
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
        <td>                {{ $role->name }}
        </td>
    </tr>
    <tr>
        <th scope="row">دسترسی ها</th>
        <td>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <span class="badge bg-success">{{ $v->name }}</span>

                @endforeach
            @endif
        </td>
    </tr>
    @can('role-edit')

        <tr>
        <th scope="row">ویرایش نقش</th>
        <td>

            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">ویرایش</a>

        </td>
    </tr>
    @endcan
    @can('role-delete')

    <tr>
        <th scope="row">حذف نقش</th>
        <td>

            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
            {!! Form::submit('حذف نقش', ['class' => 'btn btn-outline-danger']) !!}
            {!! Form::close() !!}
            غیر قابل بازگشت!!

        </td>
    </tr>
    @endcan

    </tbody>
</table>

</div>

@endsection
