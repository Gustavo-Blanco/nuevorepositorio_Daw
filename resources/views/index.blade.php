@extends('layouts.header_footer')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/index.css') }}">
@endpush


{{-- @push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endpush--}}

@section('content')
    <main>
        <!-- <section class="baner-fondo d-flex justify-content-center align-items-center text-light">
            <div>
                <h1>we have offers with the best cost</h1>
                <h2>Go, Right now</h2>
            </div>
        </section> -->

        <!-- CARRUSEL -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner altura">
                <div class="carousel-item active w-100">
                    <img class="d-block w-100 altura" src="img/ropa.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <p>No puedes comprar la felicidad, pero puedes comprar nuestros productos que son algo parecido</p>
                    </div>
                </div>
                <div class="carousel-item w-100">
                    <img class="d-block w-100 altura" src="img/banner.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        
                        <p>No se trata de la talla que usas, se trata de como usas tu talla</p>
                    </div>
                </div>
                <div class="carousel-item w-100">
                    <img class="d-block w-100 altura" src="img/slider3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        
                        <p>La moda es un lenguaje que se crea a sí mismo en la ropa para interpretar la realidad</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="baner background-purple d-flex justify-content-between align-items-center px-4 color text-light">
            <div class="d-flex px-0 col-3">
                <i class="fas fa-truck display-4 rotacion col-3"></i>
                <div class="tamaño col-9 px-0">
                    <h4 class=" mb-0 font-weight-normal">Envios gratis</h4>
                    <p class=" mb-0">Debido a la pandemia global estamos ofreciendo envios gratis para evitar su contagio</p>
                </div>
            </div>
            <div class="d-flex px-0 col-3">
                <i class="fas fa-redo-alt display-4 rotacion col-3"></i>
                <div class="tamaño col-9 px-0">
                    <h4 class=" mb-0 font-weight-normal">Retorno gratis</h4>
                    <p class=" mb-0">Si tienes algún incoveniente con tu compra, siempre y cuando el producto no tenga mas de un uso accedes al retorno gratis.</p>
                </div>
            </div>
            <div class="d-flex px-0 col-3">
                <i class="far fa-question-circle display-4 col-3"></i>
                <div class="tamaño col-9 px-0">
                    <h4 class=" mb-0 font-weight-normal">Preguntas precuentes</h4>
                    <p class=" mb-0"><strong>¿Como realizar compras ?</strong><div>para realizar comprar añade un metodo de pago valido</div>
                        <strong>¿ Envios ?</strong><div> Hacemos envios a cualquier lugar del Perú</div></p>
                </div>
            </div>
        </div>
        <div class="display-4 color-purple d-flex justify-content-center text-center mt-5 color-fondo mb-3">
            <p class="subrayado-purple">Nuestras categorias</p>
        </div>
        <div class=" d-flex justify-content-center mb-5">
            <a href="{{route('categoria','Superior')}}" class="categoria position-relative d-flex justify-content-center  rounded mr-4 hover-imagen">
                <img src="{{asset('/img/general/superior.jpg')}}" class="d-block position-absolute h-100 rounded">
                <div class="fondo-imagen position-absolute rounded"></div>
                <p class="h2 position-absolute text-light">Superior</p>
            </a>
            <a href="{{route('categoria','Inferior')}}" class="categoria position-relative d-flex justify-content-center  rounded mr-4 hover-imagen">
                <img src="{{asset('/img/general/inferior.jpg')}}" class="d-block position-absolute h-100 rounded">
                <div class="fondo-imagen position-absolute rounded"></div>
                <p class="h2 position-absolute text-light">Inferior</p>
            </a>
            <a href="{{route('categoria','Calzado')}}" class="categoria position-relative d-flex justify-content-center  rounded mr-4 hover-imagen">
                <img src="{{asset('/img/general/calzado.jpg')}}" class="d-block position-absolute h-100 rounded">
                <div class="fondo-imagen position-absolute rounded"></div>
                <p class="h2 position-absolute text-light">Calzado</p>
            </a>
            {{-- <a href="#"
                class="categoria position-relative d-flex justify-content-center rounded  hover-imagen ">
                <img src="{{asset('/img/general/superior.jpg')}}" class="d-block position-absolute h-100 rounded  ">
                <div class="fondo-imagen position-absolute rounded "></div>
                <p class="h2 position-absolute text-light ">Accesorios</p>
            </a> --}}
        </div>

        <section class="separador d-flex justify-content-center align-items-center">
            <h1 class="display-2 font-italic text-light">Encuentra tu estilo</h1>
        </section>
        <div class="display-4 color-purple d-flex justify-content-center text-center mt-5 color-fondo mb-3">
            <p class="subrayado-purple">Para él/ella</p>
        </div>
        <div class="d-flex justify-content-center mb-5 container">
            <a href="{{route('genero','m')}}"
                class="el-ella position-relative overflow-hidden d-flex justify-content-center rounded mr-4 hover-imagen">
                <img src="{{asset('/img/general/men.jpg')}}" class="d-block position-absolute h-100 rounded">
                <div class="fondo-imagen position-absolute rounded"></div>
                <p class="h2 position-absolute text-light display-3">Hombres</p>
            </a>

            <a href="{{route('genero','f')}}"
                class="el-ella position-relative overflow-hidden d-flex justify-content-center rounded ml-4 hover-imagen">
                <img src="{{asset('/img/general/mujer.jpg')}}" class="d-block position-absolute h-100 rounded">
                <div class="fondo-imagen position-absolute rounded"></div>
                <p class="h2 position-absolute text-light display-3">Mujeres</p>
            </a>
        </div>
    </main>
@endsection

@push('js')
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>


@endpush
