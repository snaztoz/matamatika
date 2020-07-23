<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- CSS Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quill.core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield ('styles')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    @yield ('scripts')

</head>

<body>
    <div id="app" class="root">
        <nav class="navbar navbar-expand-md navbar-dark site-bg-blue shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('/storage/images/Matamatika.png') }}" width="40" height="40" alt="Matamatika"> <span class="site-navbar-brand-name">Matamatika</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('forum.index') }}">Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('mentoring.index') }}">Mentoring</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">Daftar</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">
                                    <img class="site-shape-circle site-navbar-user-image d-none d-md-inline border border-light" 
                                    src="{{ Auth::user()->profile_picture->profile_picture_link }}" 
                                    width="30px" height="30px" alt="user">
                                    <span class="ml-md-2">{{ Auth::user()->name }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Keluar
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <section class="py-4">
            @yield('content')
        </section>
    </div>
</body>
</html>
