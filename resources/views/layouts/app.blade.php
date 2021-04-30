<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Farm Cash Book') }}</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/select2/dist/css/select2.min.css') }}">
        <!-- Vendor JS Files -->
  <script src="asset/vendor/jquery/jquery.min.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>
  <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/vendor/venobox/venobox.min.js"></script>
  <script src="asset/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="asset/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



        <!-- App styles -->
        <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
                <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">

        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminlte.css.map') }}" rel="stylesheet">
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminlte.min.css.map') }}" rel="stylesheet">
    <link href="{{ asset('css/docs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/highlighter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/alt/adminlte.components.css') }}" rel="stylesheet">
    <link href="{{ asset('css/alt/adminlte.pages.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/alt/adminlte.pages.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fullcalendar/main.min.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="color: rgb(33, 37, 41) ! important;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background: rgb(63, 81, 181) !important;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: #fff";>Farm Cash Book
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color: #fff";>{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
</body>
</html>
