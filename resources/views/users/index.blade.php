@extends('layouts.app')


@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">مدیریت کاربر</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex ">
                    @can('user-create')

                    <a class="nav-link" href="{{ route('users.create') }}">+افزودن کاربر</a>
                    @endcan
                </div>
            </div>
        </div>
    </nav>
    <div class="container">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-striped">
        <tr>
            <th>کد</th>
            <th>نام</th>
            <th>پست الکترونیکی</th>
            <th>نقشها</th>
        </tr>
        @foreach ($data as $key => $user)
            <tr>
                <td><a href="{{ route('users.show',$user->id) }}">{{ $user->id }}</a></td>
                <td><a href="{{ route('users.show',$user->id) }}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <span class="badge bg-success">{{ $v }}</span>
                        @endforeach
                    @endif
                </td>
            </tr>
        @endforeach
    </table>


    {!! $data->render() !!}
    </div>

@endsection
