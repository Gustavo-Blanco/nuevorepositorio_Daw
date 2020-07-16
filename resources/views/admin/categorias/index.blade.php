@extends('layouts.headerAdmin')
@section('content')
    @push('css')
        <link rel="stylesheet" href=" {{ asset('css/agregar.css') }}">
    @endpush

    <div class="container mt-4">
        <div class="row container">
            <a href="{{ route('admin.productos.index') }}" class="regresar verde px-4 py-2 mb-4 text-white rounded">Regresar</a>
        </div>

        <div class="card-deck">

            @foreach($categorias as $categoria)
            <div class="card py-4 px-4">
                <img src="{{ asset('img/'.$categoria->img) }}" height="300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ route('admin.productos.create', [$categoria->id])}}">
                            {{ $categoria->nombre }}
                        </a>
                    </h5>
                    <p class="card-text"></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
