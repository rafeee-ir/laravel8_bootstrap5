<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>هرمس هاب</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="min-vh-100">
        <header>
            <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">هرمس هاب</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('ورود') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>
                                    </li>
                                @endif
                            @else

                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('home') ? 'active' : ''}}" href="/home">پنل کاربری</a>
                                </li>
                                @canany('role-list','user-list')
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        منوی مدیریت
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li class="nav-item">
                                            <a class="dropdown-item {{ request()->is('users') ? 'active' : ''}}" href="/users">مدیریت کاربران</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item {{ request()->is('roles') ? 'active' : ''}}" href="/roles">مدیریت نقشها</a>
                                        </li>
                                    </ul>
                                </li>
                                @endcanany

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        کاربری
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">خروج از حساب کاربری</a></li>
                                    </ul>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endguest

                        </ul>
                    </div>
                </div>
            </nav>
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
