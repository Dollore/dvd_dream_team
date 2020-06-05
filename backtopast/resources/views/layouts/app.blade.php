<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/logo/favicon_grey.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BackToPast') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer_styles.css') }}">

</head>
<body>
    <div class="container-fluid myContainer">

        <nav class="navbar navbar-expand-lg navbar-dark myNavLink myNavbar">

            <!-- Left Side Of Navbar -->
            <nav class="navbar myNavbar_img">
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    <img src="{{ asset('img/logo/logo.png') }}" width="75" height="75" alt="">
                </a>
            </nav>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Right Side Of Navbar -->
            <div class="collapse navbar-collapse navbar-right flex-row-reverse" id="navbarSupportedContent">

                <ul class="navbar-nav myUlNav">
                    <form class="form-inline myNavForm align-self-center" method="POST" action="{{ route('search') }}">
                        @csrf
                        <li><input class="form-control mr-sm-2" type="search" id="search" name="search" placeholder="Szukaj" aria-label="Search" required></li>
                        <li><button class="btn btn-danger my-2 my-sm-0" type="submit">Szukaj</button></li>
                    </form>
                    <li class="nav-item active">
                        <a class="nav-link" href="/">{{ __('Strona główna') }}</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('filter') }}">{{ __('Filtruj') }}</a>
                    </li>
                    @guest
                    
                    @if (Route::has('register'))
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Rejestracja') }}</a>
                    </li>
                    @endif
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Logowanie') }}</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('profile') }}">
                                {{ __('Mój profil') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('history') }}">
                                {{ __('Historia wypożyczeń') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Wyloguj') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </li>

                    @endguest
                </ul>
            </div>
        </nav>

        <div class="py-4 myFlex">
            @yield('content')

        </div>
        <footer class="myFooter col-12 footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
                            <h2>BackToPast</h2>
                            <p>Od 1989 roku posiadamy najciekawszą i największą bazę filmów, którą stale wzbogacamy o 
                            kolejne tytuły. Praca w naszym zespole jest dla nas nie tylko obowiązkiem, ale fantastyczną 
                            pasją, którą wciąż pielęgnujemy, łącząc naszą energię i entuzjazm.
                            </p>

                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
                            <h2>Linki</h2>
                            <ul>
                                <li><a href="#">Konkursy</a></li>
                                <li><a href="#">Wsparcie</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Kariera</a></li>
                                <li><a href="#">Ciasteczka</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 segment-three sm-mb-30">
                            <h2>Śledź nas</h2>
                            <p>Śledź nas na naszych profilach w mediach społecznościowych, aby być na bieżąco. Pojawiają 
                            się tam informacje o nowościach, informacje o filmach i zapowiedzi. Prowadzimy również konkursy,
                            w których możecie wygrać wspaniałe nagrody.
                            </p>
                        
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 segment-four sm-mb-30">
                            <h2>Nasz Newsletter</h2>
                            <p>Dołącz do 880 000 osób i bądź na bieżąco z nowościami, osobistymi rekomendacjami i ofertami specjalnymi.
                             Podaj swój adres email poniżej i ciesz się już dziś ciekawymi ofertami od naszego zespołu. 
                            </p>
                            <form action="">
                                <input type="email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <p class="footer-bottom-text">Wszelkie prawa zastrzeżone &copy;BackToPast.2020</p>
        </footer>
    </div>
</body>
</html>