@extends('layouts.headerAdmin')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/agregar.css') }}">
@endpush

@section('content')
<main class="h-100 pt-5 d-flex justify-content-center">
    <form class="px-4 py-3 shadow position-relative">
        <a href="dashboard.html" class="position-absolute regresar verde px-4 py-2 text-white rounded">Regresar</a>
        <h3 class="text-center mb-3 mt-5 titulo">Nuevo producto</h3>
        <select name="" class="w-100 p-1 mt-2">
            <option value="">categoria</option>
            <option value="">categoria</option>
            <option value="">categoria</option>
        </select>
        <select name="" class="w-100 p-1 mt-2">
            <option value="">Tipo</option>
            <option value="">Tipo</option>
            <option value="">Tipo</option>
        </select>
        <input type="text" class="input-background w-100 p-1 mt-2 border" placeholder="Linea">
        <input type="text" class="input-background w-100 p-1 mt-2 border" placeholder="Color">
        <input type="text" class="input-background w-100 p-1 mt-2 border" placeholder="Precio"> 
        <div class="subir-imagen mt-2 d-flex justify-content-start align-items-center px-3">
            <label for="file" class="mb-0 py-2 h5 text-white"> <i class="fas fa-cloud-upload-alt"></i> Imagen</label>
            <input type="file" id="file"src="" >
        </div>
        <div class="input_talla" id="">
            <div class="d-flex justify-content-between mt-2 col-12 px-0 talla_cantidad">
                <select name="" id="talla1" class="ml-0 col-5 px-1 py-1 talla">
                    <option value="">Talla</option>
                </select>
                <input type="text" name="" class="input-background py-1 px-2 border col-5 cantidad" placeholder="Cantidad">
                <div class="col-1"></div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-3" id="nueva">
            <div class="nueva-talla input-background bg-transparent h4">
                <i class="fas fa-plus-circle"></i> Nueva talla
            </div>
        </div>
        <div>
            <input type="submit" value="Agregar" class="verde border-0 w-100 py-2 h5 text-white mt-2 mb-2 boton">
        </div>
    </form>
</main>
@endsection

@push('js')
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/listas.js') }}"></script>
@endpush