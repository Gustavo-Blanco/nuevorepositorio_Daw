@extends('layouts.headerAdmin')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/detalle.css') }}">
@endpush

@section('content')
    <main class=" pt-3">
        <div class="container all w-100 d-flex justify-content-center pt-5">
            <div class="edit bg-white shadow pt-3 px-5">
                @if(session()->has('mensaje'))
                    <div class="alert alert-{{ session()->get('mensajeTipo') }}" role="alert">
                        {{ session()->get('mensaje') }}
                    </div>
                @endif
                <div class="title-edit mb-3 mt-3">
                    <h1 class="title text-center">Detalles</h1>
                </div>
                <div class="d-flex pb-5">
                    <div class="imagen mr-3">
                        <img src="/img/productos/{{ $producto->img }}" class="d-block">
                        <a href="{{ route('admin.productos.edit', [$producto->id]) }}"
                           class="text-dark mt-3 py-2 d-block  text-center rounded" style="background: gold">Editar
                        </a>
                        <a href="{{ route('admin.productos.index') }}"
                           class="bg-verde text-white mt-3 py-2 d-block  text-center rounded">Regresar
                        </a>
                    </div>
                    <div class="detalles">
                        <div class="titulo color-verde">
                            <h3 class="mb-0">Características</h3>
                        </div>
                        <div class="px-2">
                            <div class="d-flex justify-content-between">
                                <p class="mt-2 h6 color-fondo">Categoria</p>
                                <p class="mt-2 h6">{{ $producto->tipo->categoria->nombre }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mt-2 h6 color-fondo">Tipo</p>
                                <p class="mt-2 h6">{{ $producto->tipo->nombre }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mt-2 h6 color-fondo">Linea</p>
                                <p class="mt-2 h6">{{ $producto->linea }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mt-2 h6 color-fondo">Genero</p>
                                <p class="mt-2 h6">{{ $producto->genero }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mt-2 h6 color-fondo">Color</p>
                                <p class="mt-2 h6">{{ $producto->color }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mt-2 h6 color-fondo">Precio</p>
                                <p class="mt-2 h6">{{ $producto->precio }}</p>
                            </div>
                        </div>
                        <div>
                            <div class="titulo color-verde mt-2">
                                <h3 class="mb-0">Detalles</h3>
                            </div>
                            <table class="table table-sm">
                                <thead class="text-dark">
                                <tr>
                                    <th class="text-center">Talla</th>
                                    <th class="text-center">Stock</th>
                                    <th class="text-center">
                                        <a href="{{ route('admin.detalles.create', [$producto->id]) }}" class="text-dark h5">
                                            <i class="fas fa-plus-circle"></i>
                                        </a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $producto->detalleProductos as $detalles)
                                <tr>
                                    <td class="text-center">{{ $detalles->talla }}</td>
                                    <td class="text-center">{{ $detalles->stock }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('admin.detalles.destroy', [$detalles->id]) }}" method="post" class="">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" onclick="return confirm('Estas Seguro?')" class=" btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
