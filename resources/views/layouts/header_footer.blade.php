<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ef09053d88.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
    @stack('css')

</head>

<body>
    <header class="px-3 d-flex align-items-center justify-content-center text-light position-fixed w-100 shadow">
        <a href="{{ url('./') }}" class="col-1 d-flex align-items-center h-100">
            <img src="/img/logo.png" alt="" class="h-75">
        </a>
        <div class="col-5 mx-1 d-flex px-0">
            <div class="pl-0 col-3 d-flex align-items-center text-left">
                <i class="fas fa-tshirt h4 mb-0 col-3 text-left pl-0"></i>
                <a href="{{ route('categoria','Superior') }}" class="mb-0 col-9 text-light">Superior</a>
            </div>
            <div class="pl-0 col-3 d-flex align-items-center text-left">
                <!-- <i class="fas fa-tshirt h4 mb-0 col-3 text-left pl-0"></i> -->
                <img src="{{ asset('img/pantalones.png') }}" class="iconos">
                <a href="{{ route('categoria','Inferior') }}" class="mb-0 col-9 text-light">Inferior</a>
            </div>
            <div class="pl-0 col-3 d-flex align-items-center text-left">
                <img src="{{ asset('img/shoes.png') }}" class="iconos">
                <a href="{{ route('categoria','Calzado') }}" class="mb-0 col-9 text-light">Calzado</a>
            </div>
            <!--
            <div class="pl-0 col-3 d-flex align-items-center text-left ">
                <img src="{{ asset('img/lentes.png') }}" class="iconos">
                <a href="{{ route('categoria','Accesorios') }}" class="mb-0 col-9 text-light">Accesorios</a>
            </div>
            -->

        </div>
        <div class="col-3 mx-1">
            <form action="{{ route('busqueda') }}" method="POST" class="text-right pb-0 px-0 d-flex justify-content-end">
                @csrf
                <input type="search" name="busqueda" id="#" class="text-left text-light busqueda" placeholder="search">
                <i class="fas fa-search mr-0 h5 mb-0 p-2 search"></i>
            </form>
        </div>
        @guest
            <div href="#" class="col-1 mx-1 text-right pr-0">
                <a href="{{ route('login') }}" class="text-light">
                    <i class="fas fa-user-circle h2 mb-0"></i>
                </a>
            </div>
            {{-- <div href="#" class="col-1 mx-3 text-left pr-0">
                <a href="{{ route('register') }}" class="text-light">
                    <i class="fas fa-laptop-medical h3 mb-0 rotacion"></i>
                </a>
            </div> --}}
        @else
            {{-- <div href="#" class="col-1 mx-1 text-right pr-0">
                <a href="{{ route('login') }}" class="text-light">
                    <i class="fas fa-user-circle h2 mb-0"></i>
                </a>
            </div> --}}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-flex justify-content-center">
                @csrf
                <button type="submit" class="bg-transparent px-4 py-2 logout text-white">Logout</button>
            </form>
            <div href="#" class="col-1 mx-3 text-left pr-0">
                <a href="#" class="text-light">
                    <i class="fas fa-shopping-cart h3 mb-0 rotacion"></i>
                    <span class="badge">{{ Session::has('carrito') ? Session::get('carrito')->cantidadTotal : ''}}</span>
                </a>
            </div>
        @endguest

    </header>
    <nav></nav>

    @yield('content')

    <footer class="background-purple py-5 none">
        <div class="container d-flex justify-content-between text-white">
            <div class="col-3">
                Gzuck es el nombre de nuestra tienda de ropas, fabricamos las mejores prendas de vestir y tendras un amplio repertorio para tu elección
            </div>
            <div class="col-3">
                <p><i class="fab fa-facebook"></i> Facebook</p>
                <p><i class="fab fa-twitter"></i> Twitter</p>
                <p><i class="fab fa-instagram"></i> Instagram</p>
                <p><i class="fas fa-envelope"></i> Correo</p>
            </div>
            <div class="col-3">
                <p><i class="fas fa-phone-square"></i> 987744870</p>
                <p><i class="fas fa-home"></i> Av. cascanueces, Tecsup, Santa anita</p>
                <p><i class="fas fa-envelope"></i> gustavo.blanco@tecsup.edu.pe</p>
            </div>
        </div>
    </footer>
    @stack('js')
</body>

</html>
