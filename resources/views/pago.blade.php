@extends('layouts.header_footer')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/info.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/register.css') }}">
@endpush

@section('content')
<main class="d-flex justify-content-center align-items-center py-2 pt-5">
    <div class="d-flex justify-content-center align-items-center flex-column bg-white sombra mb-4">
        <div class="bg-azul w-100 text-center">
            <h3 class="my-2 text-white">Tarjeta de credito</h3>
            
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="p-2">
                <img src="img/visa.png" width="50">
            </div>
            <div class="p-2">
                <img src="img/bbva.jpg" width="50">
            </div>
            <div class="p-2">
                <img src="img/pagoefectivo.png" width="60">
            </div>
        </div>
        <form class="my-3 mx-4">
            <div class="d-flex flex-column mb-3">
                <label for="">Número de tarjeta</label>
                <input type="number" class="campos mb-0 mt-0 p-1" placeholder="Numero de tarjeta">
                
            </div>
            <div class="d-flex flex-column mb-3">
                <label for="">Titular de la tarjeta</label>
                <input type="text" class="campos  mt-0 p-1" placeholder="Nombre del titular">
            </div>
            <div class="d-flex mb-2 col-12 justify-content-between pl-0 pr-0">
                <div class="col-6 px-0">
                    <label for="">Mes de caducidad</label>
                    <input type="number" class="campos py-1" placeholder="Mes de caducidad">
                </div>
                <div class="col-6 px-0">
                    <label for="">Año de caducidad</label>
                    <input type="number" class="campos py-1" placeholder="Año de caducidad">
                </div>
            </div>
            <div class="d-flex mb-2 mt-3">
                <div class="form-group col-6 pl-0">
                    <label for="">Código CSV</label>
                    <input type="number" class="campos p-1" placeholder="CSV">
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <button type="button"
                    class="boton-azul bg-azul border-0 py-2 rounded text-light d-inline-block px-5 mb-2">Pagar</button>
            </div>

        </form>
    </div>
</main>
@endsection