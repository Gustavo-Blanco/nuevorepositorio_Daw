@extends('layouts.header_footer')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/superior.css') }}">
@endpush

@section('content')
    <main>
        
        <br>
        <hr style="width:80%;" class="mt-0">
        <div class="d-flex justify-content-around container">
            <div class="col-2 px-0 text-center">
                <select class="w-100 py-1" id="tipo">
                    <option value="0" >Tipo</option>
                    @foreach ($tipos as $i)
                        <option value="{{$i->id}}">{{$i->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2 px-0 text-center">
                <select class="w-100 py-1" id="genero">
                    <option value="u">Genero</option>
                    <option value="m">Hombres</option>
                    <option value="f">Mujeres</option>
                </select>
            </div>
            <div class="col-2 px-0 text-center">
                <select class="w-100 py-1" id="color">
                    <option value="0">Color</option>
                    @foreach ($colores as $i)
                        <option value="{{$i->color}}">{{$i->color}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2 px-0 text-center">
                <select class="w-100 py-1" id="talla">
                    <option value="0">Talla</option>
                    @foreach ($tallas as $i)
                        <option value="{{$i->talla}}">{{$i->talla}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2 px-0 text-center">
                <select class="w-100 py-1" id="orden">
                    <option value="0">Orden</option>
                    <option value="asc">Menor a mayor precio</option>
                    <option value="desc">Mayor a menor precio</option>
                </select>
            </div>
        </div>
        <div class="container d-flex flex-wrap py-3 justify-content-center px-0" id="cont_productos">
            @foreach ($productos as $producto)
                <div class="catalogo d-flex flex-column py-0 mb-3 mr-0 mx-3">
                    <a href="/{{ $producto->categoria }}/info/{{ $producto->id }}" class="overflow-hidden d-flex justify-content-center align-items-center">
                        <img src="/img/productos/{{ $producto->img }}" >
                    </a>
                    <div class="catalogo-inferior px-2 pt-1">
                        <p class="my-0 h4 gray">{{ $producto->nombre }} {{ $producto->linea }}</p>
                        <p class="my-2">{{ $producto->color }}</p>                    
                    </div>
                    <div class="precio background-purple text-white d-flex align-items-center justify-content-center h3 m-0">S/. {{ $producto->precio }}</div>
                </div>
            @endforeach
        </div>
    </main>
@endsection


@push('js')
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/busquedas.js') }}"></script>
    
@endpush
