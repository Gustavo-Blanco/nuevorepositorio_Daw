@extends('layouts.headerAdmin')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/dashboard.css') }}">
@endpush

@section('content')
    <div class="container">
        <main class="h-100 pt-5">
            <table class="table container bg-white">
                <thead class="encabezado text-white">
                    <div class="d-flex">
                        <th class="h4">Tipo</th>
                        <th class="h4">Linea</th>
                        <th class="h4">Color</th>
                        <th class="h4">Precio</th>
                        <th class="text-center h4">
                            <a href="agregar.html" class="text-white text-decoration-none">
                                <i class="fas fa-plus-circle"></i> Agregar
                            </a>
                        </th>
                    </div>
                </thead>
                <tbody>
                    <tr class="p-0 m-0">
                        <td class="h5 pt-3  pb-0 font-weight-normal">Camisa</td>
                        <td class="h5 pt-3  pb-0 font-weight-normal">Lunotic</td>
                        <td class="h5 pt-3  pb-0 font-weight-normal">Color</td>
                        <td class="h5 pt-3  pb-0 font-weight-normal">Precio</td>
                        <td class="text-center pt-2 pb-2">
                            <a href="detalle.html" class=" btn btn-info">Mostrar</a>
                            <a href="editar.html" class=" btn btn-warning">Editar</a>
                            <a href="" class=" btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
@endsection