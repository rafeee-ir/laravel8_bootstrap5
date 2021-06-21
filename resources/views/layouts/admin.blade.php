<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hermeshub') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="min-vh-100">
{{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                --}}{{--                    {{ config('app.name', 'Hermeshub') }}--}}
{{--                هرمس هاب--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="navbar-collapse" id="navbarSupportedContent">--}}
{{--                <!-- Left Side Of Navbar -->--}}
{{--                <ul class="navbar-nav ml-auto">--}}

{{--                </ul>--}}

{{--                <!-- Right Side Of Navbar -->--}}
{{--                <ul class="navbar-nav mr-auto">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @guest--}}
{{--                        @if (Route::has('login'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('ورود') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                {{ Auth::user()->name }}--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('خروج') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endguest--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
    <header>
        <div class="collapse bg-info" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">هرمس هاب</h4>
                        <p class="text-muted">زیرساخت آنلاین بیمه</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">دسترسی سریع</h4>
                        <ul class="list-unstyled">
                            <li><a href="/" class="text-white">صفحه اصلی</a></li>
                                                            <a class="text-white" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                                {{ __('خروج') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-info shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>پنل مدیریت</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="تبديل التنقل">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <main class="py-4">
        @yield('content')
    </main>
</div>
<footer>
    <div class="container-fluid bg-dark text-light text-center py-5">
        Hermeshub. All rights reserved. 2021
    </div>
</footer>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
