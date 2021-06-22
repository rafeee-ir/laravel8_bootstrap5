@extends('layouts.app')


@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">افزودن کاربر</a>
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


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif






        <form action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">نام</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">مثال: علی احمدی</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">پست الکترونیکی</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">مثال: info@hermeshub.ir</div>
            </div>
            <div class="mb-3">
                <label for="roles[]" class="form-label">نقش(ها)</label>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-select','multiple')) !!}
                <div id="rolesHelp" class="form-text">انتخاب یک یا چند نقش ممکن است</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">رمز</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">تایید رمز</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password">
            </div>




            <button type="submit" class="btn btn-success">ثبت کاربر</button>
        </form>


    </div>
@endsection
