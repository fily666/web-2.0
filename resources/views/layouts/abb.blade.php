<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
        body {
            background: #f5f5f5;
        }

        .row {
            margin-left: 0px;
            margin-right: 0px;
        }

        #wrapper {
            padding-left: 70px;
            transition: all .4s ease 0s;
            height: 100%
        }

        #sidebar-wrapper {
            margin-left: -260px;
            left: 70px;
            width: 250px;
            background: #0c549e;
            position: fixed;
            height: 100%;
            z-index: 10000;
            transition: all .4s ease 0s;
        }

        .sidebar-nav {
            display: block;
            float: left;
            width: 250px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        #page-content-wrapper {
            padding-left: 0;
            margin-left: 0;
            width: 100%;
            height: auto;
        }

        #wrapper.active {
            padding-left: 250px;
        }

        #wrapper.active #sidebar-wrapper {
            left: 260px;
        }

        #page-content-wrapper {
            width: 100%;
        }

        #sidebar_menu li a,
        .sidebar-nav li a {
            color: #fff;
            display: block;
            float: left;
            text-decoration: none;
            width: 250px;
            background: #0c549e;
            border-bottom: 0.5px solid #1A1A1A;
        }

        .sidebar_name {
            padding-top: 25px;
            color: #fff;
            opacity: .7;
        }

        .sidebar-nav li {
            line-height: 40px;
            text-indent: 20px;
        }

        .sidebar-nav li a {
            color: #fff;
            display: block;
            text-decoration: none;
        }

        .sidebar-nav li a:hover {
            color: #fff;
            background: #09325C;
            text-decoration: none;
        }

        .sidebar-nav li a:active,
        .sidebar-nav li a:focus {
            text-decoration: none;
        }

        .sidebar-nav>.sidebar-brand {
            height: 65px;
            line-height: 63px;
            font-size: 18px;
        }

        .sidebar-nav>.sidebar-brand a {
            color: #999999;
        }

        .sidebar-nav>.sidebar-brand a:hover {
            color: #fff;
            background: none;
        }

        #main_icon {
            float: right;
            padding-right: 65px;
            padding-top: 20px;
            background: rgba(255, 99, 71, 0);
        }

        .sub_icon {
            float: right;
            padding-right: 65px;
            padding-top: 10px;
            background: rgba(255, 99, 71, 0);
            color: #fff;

        }



        .content-header {
            height: 65px;
            line-height: 65px;
        }

        .content-header h1 {
            margin: 0;
            margin-left: 20px;
            line-height: 65px;
            display: inline-block;
        }
        .bbb {
            margin-top: 30px;

        }





        .sidebar-nav-2 {
            display: block;
            float: left;
            width: 250px;
            margin-top: 100px;
            text-align: right;
            background: #09325C;
            padding: 50px;
            font-size: 18px;
            color: #fff;
            text-decoration: none;

        }

        .sidebar-nav-2 li a {
            color: #999999;
            display: block;
            text-decoration: none;
        }

        










        @media (max-width:767px) {
            #wrapper {
                padding-left: 10px;
                transition: all .4s ease 0s;
            }

            #sidebar-wrapper {
                left: 250px;
            }

            #wrapper.active {
                padding-left: 50px;
            }

            #wrapper.active #sidebar-wrapper {
                left: 70px;
                width: ;
                transition: all .4s ease 0s;
            }
        }

    </style>

</head>

<body>
    <div id="wrapper" class="active">
        <div id="sidebar-wrapper">
            <ul id="sidebar_menu" class="sidebar-nav">
                <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
            </ul>
            <ul class="sidebar-nav" id="sidebar">

                <li><a href="{{ url('/home') }}">Home<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                <li><a href="{{ url('/contacto') }}">Participacion<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                <li><a href="{{ url('/estadisticas') }}">Estadisticas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                <li><a href="{{ url('/usuarios') }}">Usuarios<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                <li><a>Relatorio<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                <li><a>Relatorio<span class="sub_icon glyphicon glyphicon-link"></span></a></li>

            </ul>

            <div id="app-navbar-collapse">

                <ul class="sidebar-nav-2">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="col-lg-12 btn-default">
                <div class="col-lg-2">
                    <img src="https://www.trestintas.com/sites/all/themes/megaw/images/3TLogoIllustratedWallpaper.png" alt="Los Angeles" style="width:100%;">
                </div>
                <div class="col-lg-10 bg-primary">
                    <b>
                        <h1 class="bg-primary  text-white text-center">wallpaper citis </h1>
                    </b>
                </div>
            </div>

           
                <div class="bbb col-lg-12">

                    @yield('content')

                </div>
            </div>

        </div>



        <!-- Scripts -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("active");
            });

        </script>
        <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>
