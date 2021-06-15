@php($title='هرمس هاب')
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="row">
                <div class="col-md-4 d-none d-md-block">
                    <img src="/storage/bgLogin.jpg" alt="" class="w-100">
                </div>
                <div class="col-md-8 align-items-center d-flex">
                    <div class="w-100">
                        <div class="h3">
                            ورود به پنل مدیران | هرمس هاب
                        </div>
                        <hr class="w-25">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                            <label for="inputEmail">پست الکترونیکی</label>
                            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="پست الکترونیک را وارد نمایید">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @else
                                    <small id="emailHelp" class="form-text text-muted">اطلاعات شما نزد ما محفوظ است.</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">رمز ورود</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('یادآوری') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('به یاد داشته باش') }}
                                </label>
                            </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">                                    {{ __('ورود به پنل مدیریت') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('رمز خود را فراموش کردید؟') }}
                                </a>
                            @endif
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
