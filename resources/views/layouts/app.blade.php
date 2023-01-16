<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Cube') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

<footer style="background-color: rgba(0,0,0,0.3)" class="customPadding">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="footerItems text-center">
                    <li><a href="{{ url('/home') }}">Company</a></li>
                    <li><a href="{{ url('/home') }}">Blog</a></li>
                    <li><a href="{{ url('/home') }}">Events</a></li>
                    <li><a href="{{ url('/home') }}">Careers</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="footerItems  text-center">
                    <li><a href="{{ url('/home') }}">Buy 3D Models</a></li>
                    <li><a href="{{ url('/home') }}">Freelance 3D Projects</a></li>
                    <li><a href="{{ url('/home') }}">Sell 3D Models</a></li>
                    <li><a href="{{ url('/home') }}">Discounts</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="footerItems  text-center">
                    <li><a href="{{ url('/home') }}">Help Center</a></li>
                    <li><a href="{{ url('/home') }}">Contact Us</a></li>
                    <li><a href="{{ url('/home') }}">Community</a></li>
                    <li><a href="{{ url('/home') }}">Forum</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
