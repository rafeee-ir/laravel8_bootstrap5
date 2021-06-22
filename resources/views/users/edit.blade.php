@extends('layouts.app')


@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">ویرایش کاربر</a>
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
        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
            <div class="mb-3">
                <label for="name" class="form-label">نام</label>
                {!! Form::text('نام', $user->name, array('class' => 'form-control')) !!}
                <div id="nameHelp" class="form-text">نام فعلی: {{$user->name}}</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">پست الکترونیکی</label>
                {!! Form::text('پست الکترونیکی', $user->email, array('class' => 'form-control border-warning','readonly' => 'true'))   !!}
                <div id="emailHelp" class="form-text">غیرقابل تغییر</div>
            </div>
            <div class="mb-3">
                <label for="roles[]" class="form-label">نقش(ها)</label>
                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}

                <div id="rolesHelp" class="form-text">انتخاب یک یا چند نقش ممکن است</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">رمز</label>
                <input type="password" class="form-control" id="password" name="password">
                <div id="passHelp" class="form-text">در صورتی که نیاز  به تغییر رمز نیست باکس رمز ها را خالی رها کنید</div>

            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">تایید رمز</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password">
            </div>




            <button type="submit" class="btn btn-success">ویرایش کاربر</button>
        {!! Form::close() !!}


    </div>

@endsection
