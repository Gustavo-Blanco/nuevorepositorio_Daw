@extends('layouts.headerAdmin')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/agregar.css') }}">
@endpush

@section('content')
    <main class="h-a100 pt-5 d-flex justify-content-center">
        <form class="px-4 py-3 shadow position-relative" action="{{ route('admin.productos.update', [$producto->id]) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <a href="{{ route('admin.productos.show', [$producto->id]) }}" class="position-absolute regresar verde px-4 py-2 text-white rounded">Regresar</a>
            <h3 class="text-center mb-3 mt-5 titulo">Editar Producto</h3>
            <select class="w-100 p-1 mt-2" disabled>
                <option value="{{$categoria->id}}" selected>{{ $categoria->nombre}}</option>
            </select>
            <select name="tipo_id" class="w-100 p-1 mt-2">
                <option value="{{ null }}">Tipo</option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo->id }}" {{$producto->tipo_id == $tipo->id ? 'selected' : '' }}>{{ $tipo->nombre }}</option>
                @endforeach
            </select>
            @error('tipo_id')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="text" name="linea" value="{{ $producto->linea }}" class="input-background w-100 p-1 mt-2 border" placeholder="Linea">
            @error('linea')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <select name="genero" class="w-100 p-1 mt-2">
                <option value="" >Genero</option>
                <option value="M" {{ $producto->genero == 'M' ? 'selected' : '' }}>M</option>
                <option value="F" {{ $producto->genero == 'F' ? 'selected' : '' }}>F</option>
                <option value="Ambos">Ambos</option>
            </select>
            @error('genero')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="text" name="color" value="{{ $producto->color }}" class="input-background w-100 p-1 mt-2 border" placeholder="Color">
            @error('color')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="text" name="precio" value="{{ $producto->precio }}" class="input-background w-100 p-1 mt-2 border" placeholder="Precio">
            @error('precio')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="subir-imagen mt-2 d-flex justify-content-start align-items-center px-3">
                <label for="file" class="mb-0 py-2 h5 text-white"> <i class="fas fa-cloud-upload-alt"></i>  IMG</label>
                <input name="img" value="{{ $producto->img }}" type="file" id="file">
            </div>
            @error('img')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div>
                <input type="submit" value="Actualizar" class="verde border-0 w-100 py-2 h5 text-white mt-2 mb-2 boton">
            </div>
        </form>
    </main>
@endsection

@push('js')
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!--<script src="{{ asset('js/listas.js') }}"></script>-->
@endpush
