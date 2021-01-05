<!DOCTYPE html>
<html lang="en">

<!-- Mirrored frte Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 07:30:06 GMT -->
<head>
<title>Farm Cash Book | @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/select2/dist/css/select2.min.css') }}">

        <!-- App styles -->
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
  
  

</head>
        


    <body data-ma-theme="indigo">
        <main class="main">

           @include('partials.header')
           @include('partials.super_admin_nav')


            @yield('content')

        </main>

        <!-- Javascript -->
        <link href="{{ asset('plugins/fullcalendar/main.min.css') }}" rel="stylesheet">
        <script src="{{ asset('plugins/fullcalendar/main.min.js') }}"></script>
        <script src="{{ asset('plugins/fullcalendar/main.esm.js') }}"></script>
        <script src="{{ asset('plugins/fullcalendar/main.js') }}"></script>
        <script src="{{ asset('plugins/fullcalendar/main.js.map') }}"></script>
        <!-- Vendors -->
        <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>

        <script src="{{ asset('vendors/bower_components/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/flot.curvedlines/curvedLines.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jqvmap/dist/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/salvattore/dist/salvattore.min.js') }}"></script>
        <script src="{{ asset('vendors/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>

        <!-- Vendors: Data tables -->
        <script src="{{ asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>

        <script src="{{ asset('vendors/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

        <!-- Charts and maps-->
        <script src="{{ asset('demo/js/flot-charts/curved-line.js') }}"></script>
        <script src="{{ asset('demo/js/flot-charts/dynamic.js') }}"></script>
        <script src="{{ asset('demo/js/flot-charts/line.js') }}"></script>
        <script src="{{ asset('demo/js/flot-charts/chart-tooltips.js') }}"></script>
        <script src="{{ asset('demo/js/other-charts.js') }}"></script>
        <script src="{{ asset('demo/js/jqvmap.js') }}"></script>

        <!-- App functions and actions -->
        <script src="{{ asset('js/app.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        <script src="{{ asset('dist/js/adminlte.js.map') }}"></script>
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('dist/js/adminlte.min.js.map') }}"></script>
        <script src="{{ asset('dist/js/demo.js') }}"></script>
        
    </body>
</html>
