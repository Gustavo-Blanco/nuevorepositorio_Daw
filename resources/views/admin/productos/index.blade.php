@extends('layouts.headerAdmin')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/dashboard.css') }}">
@endpush

@section('content')
<div class="container">
    <main class="h-100 pt-3">
        @if(session()->has('mensaje'))
            <div class="alert alert-{{ session()->get('mensajeTipo') }}" role="alert">
                {{ session()->get('mensaje') }}
            </div>
        @endif
        <table class="table container bg-white">
            <thead class="encabezado text-white">
                <div class="d-flex">
                    <th class="h5">Categoria</th>
                    <th class="h5">Tipo</th>
                    <th class="h5">Linea</th>
                    <th class="h5">Color</th>
                    <th class="h5">Precio (S/.)</th>
                    <th class="text-center h4">
                        <a href="{{ route('admin.categorias.index') }}" class="text-white text-decoration-none">
                            <i class="fas fa-plus-circle"></i>
                        </a>
                    </th>
                </div>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                <tr class="p-0 m-0">
                    <td class="h6 pt-3  pb-0 font-weight-normal">{{ $producto->tipo->categoria->nombre }}</td>
                    <td class="h6 pt-3  pb-0 font-weight-normal">{{ $producto->tipo->nombre }}</td>
                    <td class="h6 pt-3  pb-0 font-weight-normal">{{ $producto->linea }}</td>
                    <td class="h6 pt-3  pb-0 font-weight-normal">{{ $producto->color }}</td>
                    <td class="h6 pt-3  pb-0 font-weight-normal">{{ $producto->precio }}</td>
                    <td class="text-center pt-2 pb-2 d-flex justify-content-center">
                        <a href="{{ route('admin.productos.show', [$producto->id]) }}" class=" btn btn-info mr-2">Detalles</a>
                        <form class="eliminar" action="{{ route('admin.productos.destroy', [$producto->id]) }}" method="post" class="float-right">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" onclick="return confirm('Estas Seguro?')" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </main>
</div>
@endsection
