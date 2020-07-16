@extends('layouts.headerAdmin')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/editar.css') }}">
@endpush

@section('content')
<div class="all w-100 d-flex justify-content-center pt-5">
    <div class="edit bg-white shadow pt-3 px-4 py-3 shadow position-relative">
        <a href="dashboard.html" class="position-absolute regresar verde px-4 py-2 text-white rounded">Regresar</a>
        <div class="title-edit">
            <h1 class="title text-center">Editar Producto</h1>
        </div>
        <form class="">
            <div class="all-edit d-flex justify-content-end p-5 m-auto">
                <div class="img">
                    <img src="img/men.jpg" alt="">
                    <div class="subir-imagen mt-2 d-flex justify-content-start align-items-center px-3">
                        <label for="file" class="mb-0 py-2 h5 text-white"> <i class="fas fa-cloud-upload-alt"></i> Imagen</label>
                        <input type="file" id="file"src="" >
                    </div>
                </div>
                <div class="cambiar px-3 pt-0 ml-3">
                    <select name="" id="" class="w-100 mt-2 py-1">
                        <option value="">Categoria</option>
                    </select>
                    <select name="" id="" class="w-100 mt-2 py-1">
                        <option value="">Tipo</option>
                    </select>
                    <input type="text" placeholder="Nombre" class="w-100 input-background py-1 border mt-2">
                    <input type="text" placeholder="Color" class="w-100 input-background py-1 border mt-2">
                    <input type="text" placeholder="Precio" class="w-100 input-background py-1 border mt-2">
                    
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
                    <div class="">
                        <button type="submit" class="verde border-0 w-100 py-2 h5 text-white mt-2 mb-2">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/listas.js') }}"></script>
@endpush
