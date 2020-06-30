<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="/imagens/logo.png" class="img-fluid" alt="NapBox" width="140">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest
                        <ul class="navbar-nav mr-auto">
                            <a class="nav-link" href="/">Inicio</a>
                            <a class="nav-link" href="/aboutus">Sobre Nós</a>
                            <a class="nav-link" href="/nossosquartos">Os nossos quartos</a>
                        </ul>
                    @else
                        <ul class="navbar-nav mr">
                            <a class="nav-link" href="/home">Inicio</a>
                        </ul>
                    @endguest
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registar') }}</a>
                                </li>
                            @endif
                        @else
                            <a class="nav-link" href="/minhasreservas">Minhas reservas</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4" >
            @yield('content')
        </main>
        <div>
            <style>
                .footer {
                    position: fixed;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    background-color: red;
                    color: black;
                    text-align: center;
                    padding-bottom: 1px;
                    background-color: #8bc9fd;
                }
            </style>
            <div class="footer">
                <br>
                <p>NapBox Sleep&Go © 2020 NapBox, Inc.                                                                  napboxsleepgo@gmail.com                                                                                                                           <a href="https://www.instagram.com/napboxsleepgo/?hl=pt" target="_blank"><img src="/imagens/instagram.png" alt="instagram" width="25" height="25"></a></p>
                <p><img src="/imagens/localization.png" alt="Localizacao" height="20">Portugal                                                                                                                                                                                                                                                                                                </p>
            </div>
        </div>
    </div>
</body>
</html>
