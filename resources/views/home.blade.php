<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- CSS Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield ('styles')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    @yield ('scripts')

</head>

<body>
    <div id="app">
        <main>
            <div style="position:relative">
                <div class="site-navbar-clip">
                    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('/storage/images/Matamatika.png') }}" width="40" height="40" alt="Matamatika"> <span class="site-navbar-brand-name text-warning">Matamatika</span>
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
                                            <a class="nav-link text-light" href="{{ route('profile') }}">
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
                </div>
                <div class="site-navbar-clear"></div>

                <section class="py-5 bg-dark">
                    <div class="d-lg-flex align-items-center container">
                        <div class="col-lg-8 px-lg-4 my-lg-5 mr-lg-3 pt-4">
                            <h1 class="text-light mb-4">
                                <strong>Butuh bantuan belajar Matematika?</strong>
                            </h1>
                            <div class="d-lg-flex align-items-center">
                                <a class="d-inline-block btn btn-primary mr-3 mr-lg-0" href="{{ route('forum.index') }}">
                                    <strong>Ajukan Pertanyaanmu!</strong>
                                </a>
                                <p class="d-none d-lg-block text-light ml-3 mr-lg-3 my-2"><strong>atau</strong></p>
                                <a class="d-inline-block btn btn-warning" 
                                        href="{{ route('mentoring.index')}}">
                                    <strong>Ikuti Mentoring</strong>
                                </a>    
                            </div>
                        </div>
                        <div class="d-lg-block col-lg-4 mr-lg-5 my-5 py-0 px-3 px-lg-0">
                            <img class="w-100" src="{{ asset('/storage/svg/nonton_hp.svg') }}">
                        </div>
                    </div>
                </section>
            </div>

            <div style="position:relative">
                <div class="site-navbar-clip">
                    <nav class="navbar navbar-expand-md navbar-dark fixed-top site-bg-blue">
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
                                            <a class="nav-link text-light" href="{{ route('profile') }}">
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
                </div>
                <div class="site-navbar-clear"></div>

                <section class="py-5 px-0 container">
                    <h1 class="text-center mb-5">
                        <strong>Kebutuhanmu, <span class="site-text-blue">kami ada</span></strong>
                    </h1>
                    <div class="d-lg-flex px-4 justify-content-between">
                        <div class="card p-4 mx-lg-3 mb-4 col">
                            <div class="text-center mb-4">
                                <img src="{{ asset('/storage/svg/banyak_orang.svg') }}">
                            </div>
                            <div>
                                <h5 class="text-center">
                                    Bimbingan intensif via online (se-Indonesia) maupun 
                                    offline (Solo dan sekitarnya)
                                </h5>
                            </div>
                        </div>
                        <div class="card p-4 mx-lg-3 mb-4 col">
                            <div class="text-center mb-4">
                                <img src="{{ asset('/storage/svg/banyak_orang.svg') }}">
                            </div>
                            <div>
                                <h5 class="text-center">
                                    Tanya jawab via <a href="{{ route('forum.index') }}">online</a>
                                </h5>
                            </div>
                        </div>
                        <div class="card p-4 mx-lg-3 mb-4 col">
                            <div class="text-center mb-4">
                                <img src="{{ asset('/storage/svg/banyak_orang.svg') }}">
                            </div>
                            <div>
                                <h5 class="text-center">
                                    Open Recruitment Mentor
                                </h5>
                            </div>
                        </div>
                        <div class="card p-4 mx-lg-3 mb-4 col">
                            <div class="text-center mb-4">
                                <img src="{{ asset('/storage/svg/banyak_orang.svg') }}">
                            </div>
                            <div>
                                <h5 class="text-center">
                                    Seminar online maupun offline
                                </h5>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-5 d-lg-flex container">
                    <div class="py-3 order-1 col d-lg-flex flex-column justify-content-center">
                        <h1 class="mb-3">
                            <b><span class="site-text-blue">matematika</span>, milik semua orang</b>
                        </h1>
                        <h4 class="mb-4">
                            Kami dan juga banyak yang lainnya siap membantu kesulitanmu
                            dalam matematika
                        </h4>
                        <div>
                            <a class="btn btn-outline-primary" href="{{ route('forum.index') }}">Kunjungi Forum</a>
                        </div>
                    </div>

                    <div class="order-0 col-lg-4 mr-lg-5">
                        <img class="w-100" src="{{ asset('/storage/svg/kolaborasi_online.svg') }}">
                    </div>
                </section>

                <section class="py-5 d-lg-flex container justify-content-around">
                    <div class="py-3 col-lg-6 d-lg-flex flex-column justify-content-center">
                        <h1 class="mb-4"><b>mengapa?</b></h1>
                        <h4 class="mb-3">
                            Kami percaya, matematika tidak harus diajarkan oleh guru di sekolah, namun bisa juga oleh kawan sebaya.
                        </h4>
                        <h4>
                            Kamu boleh terus belajar! Dimanapun, kapanpun, <span class="site-text-blue">
                            banyak yang siap membantu!</span>
                        </h4>
                    </div>

                    <div class="col-lg-4">
                        <img class="w-100" src="{{ asset('/storage/svg/kolaborasi_online.svg') }}">
                    </div>
                </section>

                <section class="py-5 my-5 container d-flex justify-content-center">
                    <div class="col-lg-8 p-4 d-md-flex justify-content-center">
                        <h1 class="mb-4 mr-md-3">Memiliki kesulitan? </h1>
                        <div><a class="btn btn-primary btn-lg" href="{{ route('forum.index') }}">
                            Tanyakan di Forum!</a>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>