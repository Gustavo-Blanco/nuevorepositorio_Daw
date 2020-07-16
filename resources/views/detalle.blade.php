@extends('layouts.headerAdmin')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/detalle.css') }}">
@endpush

@section('content')
<main class=" pt-3">
    <div class="container all w-100 d-flex justify-content-center pt-5">
        <div class="edit bg-white shadow pt-3 px-5">
            <div class="title-edit mb-3 mt-3">
                <h1 class="title text-center">Detalles</h1>
            </div>
            <div class="d-flex pb-5">
                <div class="imagen mr-3">
                    <img src="img/men.jpg" alt="" class="d-block w-100">
                    <a href="dashboard.html"
                        class="bg-verde text-white mt-3 py-2 d-block  text-center rounded">Regresar</a>
                </div>
                <div class="detalles">
                    <div class="titulo color-verde">
                        <h3 class="mb-0">Características</h3>
                    </div>
                    <div class="px-2">
                        <div class="d-flex justify-content-between">
                            <p class="mt-2 h6 color-fondo">Categoria</p>
                            <p class="mt-2 h6">Superior</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mt-2 h6 color-fondo">Tipo</p>
                            <p class="mt-2 h6">Camisa</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mt-2 h6 color-fondo">Linea</p>
                            <p class="mt-2 h6">Lunotic</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mt-2 h6 color-fondo">Color</p>
                            <p class="mt-2 h6">Rojo</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mt-2 h6 color-fondo">Precio</p>
                            <p class="mt-2 h6">S/. 50</p>
                        </div>
                    </div>
                    <div>
                        <div class="titulo color-verde mt-2">
                            <h3 class="mb-0">Tallas</h3>
                        </div>
                        <div class="px-2">
                            <div class="d-flex justify-content-between">
                                <p class="mt-2 h6 color-fondo">Talla S</p>
                                <p class="mt-2 h6">10</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mt-2 h6 color-fondo">Talla M</p>
                                <p class="mt-2 h6">5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection