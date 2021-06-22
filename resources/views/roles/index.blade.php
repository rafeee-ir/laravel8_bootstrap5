@extends('layouts.app')


@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">مدیریت نقشها</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex ">
                    @can('role-create')

                    <a class="nav-link" href="{{ route('roles.create') }}">+افزودن نقش</a>
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

            <th>کد نقش</th>
            <th>نقش</th>
        </tr>
        @foreach ($roles as $key => $role)
            <tr>
                <td><a href="{{ route('roles.show',$role->id) }}">{{ $role->id }}</a></td>
                <td><a href="{{ route('roles.show',$role->id) }}">{{ $role->name }}</a></td>
            </tr>
        @endforeach
    </table>


    {!! $roles->render() !!}


    </div>
@endsection
