<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="Logo-app" src="images/mainlogo.png">
                {{ config('') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <div class="navbar-nav mr-auto">
                    <div class="dropdown hover">
                        <a href="#">Menu Balk</a>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('products.index') }}">Producten</a></li>
                            <li><a href="#">offerte aanvragen</a></li>
                            <li><a href="#">maintenance</a></li>
                            <li><a href="#">sales</a></li>
                            <li><a href="#">magazijn</a></li>
                            <li><a href="{{ route('inkoop.index') }}">Inkoop</a></li>
                            <li><a href="{{ route('customer.index') }}">Dashbord</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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
            <div class="container">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>Wie wij zijn</h6>
                    <p class="text-justify">BarrocIntens.com <i>:</i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores dicta fuga laboriosam non recusandae reprehenderit. Animi enim eveniet facere iste nemo odio omnis optio perferendis reiciendis repellat reprehenderit, similique?.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Pagina's</h6>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">Maintenance</a></li>
                        <li><a href="#">..</a></li>
                        <li><a href="#">..</a></li>
                        <li><a href="#">..</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Meer</h6>
                    <ul class="footer-links">
                        <li><a href="#">Over ons</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Bijdragen</a></li>
                        <li><a href="#">Extra Info</a></li>
                        <li><a href="#">Home Pagina</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by
                        <a href="#">Barroc Intense</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
