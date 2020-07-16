@extends('layouts.headerAdmin')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/agregar.css') }}">
@endpush

@section('content')
    <main class="h-a100 pt-5 d-flex justify-content-center">
        <form class="px-4 py-3 shadow position-relative" action="{{route('admin.productos.store')}}" method="post">
            @csrf
            <a href="{{ route('admin.categorias.index') }}" class="position-absolute regresar verde px-4 py-2 text-white rounded">Regresar</a>
            <h3 class="text-center mb-3 mt-5 titulo">Nuevo producto</h3>
            <select class="w-100 p-1 mt-2" disabled>
                    <option value="{{$categoria->id}}" selected>{{ $categoria->nombre}}</option>
            </select>
            <select name="tipo_id" class="w-100 p-1 mt-2">
                <option value="{{ null }}">Tipo</option>
                @foreach($tipos as $tipo)
                <option value="{{ $tipo->id }}" {{ $tipo->id == old('tipo_id') ? 'selected' : '' }}>{{ $tipo->nombre }}</option>
                @endforeach
            </select>
            @error('tipo_id')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="text" name="linea" value="{{ old('linea') }}" class="input-background w-100 p-1 mt-2 border" placeholder="Linea">
            @error('linea')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <select name="genero" class="w-100 p-1 mt-2">
                <option value="" {{ old('genero') == '' ? 'selected' : '' }}>Genero</option>
                <option value="M" {{ old('genero') == 'M' ? 'selected' : '' }}>M</option>
                <option value="F" {{ old('genero') == 'F' ? 'selected' : '' }}>F</option>
                <option value="Ambos" {{ old('genero') == 'Ambos' ? 'selected' : '' }}>Ambos</option>
            </select>
            @error('genero')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="text" name="color" class="input-background w-100 p-1 mt-2 border" placeholder="Color" value="{{ old('color') }}">
            @error('color')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="text" name="precio" class="input-background w-100 p-1 mt-2 border" placeholder="Precio" value="{{ old('precio') }}">
            @error('precio')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="subir-imagen mt-2 d-flex justify-content-start align-items-center px-3">
                <label for="file" class="mb-0 py-2 h5 text-white"> <i class="fas fa-cloud-upload-alt"></i> Imagen</label>
                <input name="img" type="file" id="file">
            </div>
            @error('genero')
            <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div>
                <input type="submit" value="Agregar" class="verde border-0 w-100 py-2 h5 text-white mt-2 mb-2 boton">
            </div>
        </form>
    </main>
@endsection

@push('js')
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!--<script src="{{ asset('js/listas.js') }}"></script>-->
@endpush
