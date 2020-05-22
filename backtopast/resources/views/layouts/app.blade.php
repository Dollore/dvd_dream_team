<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm myNavLink">

            <!-- Left Side Of Navbar -->
            <nav class="navbar">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo.png') }}" width="30" height="30" alt="">
                </a>
            </nav>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Right Side Of Navbar -->
            <div class="collapse navbar-collapse navbar-right flex-row-reverse" id="navbarSupportedContent">

                <ul class="navbar-nav myUlNav">
                    <form class="form-inline myNavForm align-self-center">
                        <li><input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"></li>
                        <li><button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button></li>
                    </form>
                    @guest
                    <li class="nav-item active">
                        <a class="nav-link" href="/">{{ __('Strona główna') }}</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('profile') }}">{{ __('Profil') }}</a>
                    </li>
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
                            <h3>BackToPast</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem autem eveniet at
                                que quo assumenda consequatur natus ullam facere soluta cupiditate aut et, dicta cumque
                                repellat, quis esse debitis. Quibusdam, harum.
                            </p>

                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
                            <h2>Useful links</h2>
                            <ul>
                                <li><a href="#">Event</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Hosting</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 segment-three sm-mb-30">
                            <h2>Follow Us</h2>
                            <p>Please Follow us on our Social Media Profile in order to keep updated. Lorem ipsum dolor
                                sit amet consectetur,
                                adipisicing elit. Vitae earum, accusantium officiis labore reiciendis necessitatibus
                                quam voluptas illo nemo id natus ducimus corporis deserunt, velit quia vero alias
                                voluptatum deleniti.
                            </p>
                        
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 segment-four sm-mb-30">
                            <h2>Our Newsletter</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus perspiciatis atque
                                nisi quidem
                                vero expedita ullam veniam excepturi ipsam veritatis alias temporibus iure quia corrupti
                                nihil, voluptatum voluptatibus amet quae.
                            </p>
                            <form action="">
                                <input type="email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <p class="footer-bottom-text">All Right reserved by &copy;BackToPast.2020</p>
        </footer>
    </div>
</body>
</html>