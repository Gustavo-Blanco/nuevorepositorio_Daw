@extends('layouts.header_footer')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/info.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/boleta.css') }}">
@endpush
@section('content')
    <main>
        <div class="boleta sombra my-4 col-5 p-5">
            <div class="subrayado mb-3">
                <h4 class="font-weight-bold gray">Productos</h4>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Id</p>
                <p class="col-6 px-0 text-right">1</p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Id</p>
                <p class="col-6 px-0 text-right">12</p>
            </div>
            <div class="subrayado mb-3">
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Envío total</p>
                <p class="col-6 px-0 text-right">S/. 20</p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Precio total</p>
                <p class="col-6 px-0 text-right">S/. 220</p>
            </div>
            <div class="subrayado mb-3">
                <h4 class="font-weight-bold gray">Método de pago</h4>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Número</p>
                <p class="col-6 px-0 text-right">987744870</p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Titular de la tarjeta</p>
                <p class="col-6 px-0 text-right">Gustavo Blanco</p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Fecha de caducidad</p>
                <p class="col-6 px-0 text-right">10/25</p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Código CSV</p>
                <p class="col-6 px-0 text-right">1234567</p>
            </div>
            <div class="subrayado mb-3">
                <h4 class="font-weight-bold gray">Datos de usuario</h4>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Nombre</p>
                <p class="col-6 px-0 text-right">Gustavo Blanco</p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Nombre de usuario</p>
                <p class="col-6 px-0 text-right">Gblanco</p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Email</p>
                <p class="col-6 px-0 text-right">gustavo.blanco@tecsup.edu.pe</p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Fecha de pago</p>
                <p class="col-6 px-0 text-right">10/20/2020</p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="col-6 px-0">Dirección de entrega</p>
                <p class="col-6 px-0 text-right">Santa anita, Av. Cascanueces, tecsup</p>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center mt-4">
                <a href="" class="ok text-white px-5 py-2 h5 font-weight-normal">Ok</a>
            </div>
        </div>
    </main>
@endsection