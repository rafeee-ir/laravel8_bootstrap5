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
                            ورود به هرمس هاب
                        </div>
                        <hr class="w-25">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">


                                <label for="email">پست الکترونیکی</label>
                                <input id="email" type="email" placeholder="پست الکترونیک را وارد نمایید" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @else
                                    <small id="emailHelp" class="form-text text-muted">اطلاعات شما نزد ما محفوظ است.</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">رمز ورود</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ورود به سامانه') }}
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
