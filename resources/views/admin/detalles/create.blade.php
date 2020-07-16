@extends('layouts.headerAdmin')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/agregar.css') }}">
@endpush

@section('content')
    <main class="h-a100 pt-5 d-flex justify-content-center">
        <form class="px-4 py-3 shadow position-relative" action="{{route('admin.detalles.store')}}" method="post">
            @csrf
            <a href="{{ route('admin.productos.show', [$producto]) }}" class="position-absolute regresar verde px-4 py-2 text-white rounded">Regresar</a>
            <h3 class="text-center mb-3 mt-5 titulo">Nuevo Detalle</h3>
            <input type="hidden" name="producto_id" value="{{$producto}}">
            <!--<select name="talla" class="w-100 p-1 mt-2">
                <option value="{{ null }}" selected>Talla</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>-->
            <input type="text" name="talla" class="input-background w-100 p-1 mt-2 border" placeholder="Talla">
            @error('talla')
                <span class="invalid-feedback d-block ml-2">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="text" name="stock" class="input-background w-100 p-1 mt-2 border" placeholder="Stock">
            @error('stock')
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
