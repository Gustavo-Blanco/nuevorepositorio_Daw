<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ef09053d88.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/header_admin.css') }}">
    @stack('css')

    <title>Proyecto Final</title>
</head>

<body>
    <header class="px-3 d-flex align-items-center bg-fondo-header fixed-top shadow">
        <a class="navbar-brand" href="{{ route('admin.productos.index') }}">
            <img src="{{ asset('img/logo.png') }}" width="40" height="40" alt="">
        </a>
        <!--<div class="col-7 mx-1">
            <form action="#" method="#" class="text-right pb-0 px-0 d-flex justify-content-end">
                <input type="search" name="#" id="#" class="text-left text-light search" placeholder="search">
                <i class="fas fa-search mr-0 h5 mb-0 p-2 text-white search"></i>
            </form>
        </div>-->
        <div href="#" class="col mx-1 pr-5">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown align-self-end">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Salir
                        </a>

                        <!--
                        @can('manage-users')
                        <a class="dropdown-item" href="{{ route('admin.productos.index') }}">
                            Panel de Control
                        </a>
                        @endcan-->

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </div>

                </li>
            </ul>
        </div>
    </header>

    <nav></nav>

    @yield('content')


    <!-- Bootstrap Scripts -->
    @stack('js')
    <script src="{{ asset('js/app.js') }}" defer></script>


</html>
