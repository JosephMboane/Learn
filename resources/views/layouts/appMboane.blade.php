<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Animation library for notifications   -->
    <link rel="stylesheet" href="<?php echo asset('css/animate.min.css')?>" type="text/css" rel="stylesheet">

    <!--  Light Bootstrap Table core CSS    -->
    <link rel="stylesheet" href="<?php echo asset('css/light-bootstrap-dashboard.css?v=1.4.0')?>" type="text/css" rel="stylesheet">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo asset('css/demo.css')?>" type="text/css" rel="stylesheet">

    <!--     Fonts and icons     -->

    <link rel="stylesheet" href="<?php echo asset('css/pe-icon-7-stroke.css')?>" type="text/css" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo asset('css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/vendor.bundle.base.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/vendor.bundle.addons.css')?>">

    <link rel="stylesheet" href="<?php echo asset('css/normalize.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/cs-skin-elastic.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/dataTables.bootstrap.min.css')?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>">
    <!-- endinject -->
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo asset('css/bootstrapp.min.css')?>" type="text/css" rel="stylesheet">
    <link href="bootstrap/myedit.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}

                {{--<!-- Collapsed Hamburger -->--}}
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                    {{--<span class="sr-only">Toggle Navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}

                {{--<!-- Branding Image -->--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--&nbsp;--}}
                {{--</ul>--}}

                {{--<!-- Right Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@guest--}}
                        {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--@else--}}
                            {{--<li><a href="{{ route('admin.companies.index') }}">Companies</a></li>--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                           {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--@endguest--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
<!--   Core JS Files   -->
<script src="<?php echo asset('js/jquery.3.2.1.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('js/bootstrap.min.js')?>" type="text/javascript"></script>

<!--  Charts Plugin -->

<!--  Notifications Plugin    -->

<!--  Google Maps Plugin    -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo asset('js/light-bootstrap-dashboard.js?v=1.4.0')?>"></script>



<script src="<?php echo asset('js/table/datatables.min.js')?>"></script>
<script src="<?php echo asset('js/table/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo asset('js/table/jszip.min.js')?>"></script>
<script src="<?php echo asset('js/table/vfs_fonts.js')?>"></script>
<script src="<?php echo asset('js/table/datatables-init.js')?>"></script>

</html>