@extends('layouts.header_footer')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/carrito.css') }}">
@endpush

@section('content')
    <main class="container">
        <div class="d-flex justify-content-between py-0 mt-4">
            <h2>Artículos en cesta(2)</h2>
            <div class="d-flex p-0 justify-content-center align-items-end">
                <h4 class="mr-2">Vaciar cesta</h4>
                <i class="fas fa-trash h4"></i>
            </div>
        </div>
        <hr class="mt-0">
        <div class="carrito d-flex justify-content-between mb-4 align-items-start">
            <div class="articulos mr-4">
                <div class="d-flex justify-content-between mb-4 articulo">
                    <div class="left p-2 d-flex">
                        <div class="col-3 w-100 overflow-hidden d-flex justify-content-center align-items-center">
                            <img src="img/superior1.jpg" class="d-block h-100">
                        </div>
                        <div class="px-2 col-4 pt-2">
                            <h4 class="font-weight-bold gray">Camisa lunotic</h4>
                            <div class="mt-4 gray">Color: rojo</div>
                            <div class="mt-4 gray">Precio: S/. 50</div>
                            <div class="mt-4 gray">Envío: S/. 10</div>
                        </div>
                        <div class="px-0 col-5 pt-2">
                            <div class="d-flex px-0 justify-content-between mb-4">
                                <div class="col-4 px-0 d-flex align-items-center">Cantidad</div>
                                <select name="" id="" class="col-8 px-0 py-1 lista">
                                    <option value="">Cantidad</option>
                                </select>
                            </div>
                            <div class="d-flex px-0 justify-content-between mb-4">
                                <div class="col-4 px-0 d-flex align-items-center">Talla</div>
                                <select name="" id="" class="col-8 px-0 py-1 lista">
                                    <option value="">Talla</option>
                                </select>
                            </div>
                            <div class="h5 font-weight-bold color-purple">Precio total: S/.100</div>
                        </div>
                    </div>
                    <div class="right d-flex justify-content-center align-items-center h3 mb-0 text-white">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between articulo">
                    <div class="left p-2 d-flex">
                        <div class="col-3 w-100 overflow-hidden d-flex justify-content-center align-items-center">
                            <img src="img/superior1.jpg" class="d-block h-100">
                        </div>
                        <div class="px-2 col-4 pt-2">
                            <h4 class="font-weight-bold gray">Camisa lunotic</h4>
                            <div class="mt-4 gray">Color: rojo</div>
                            <div class="mt-4 gray">Precio: S/. 50</div>
                            <div class="mt-4 gray">Envío: S/. 10</div>
                        </div>
                        <div class="px-0 col-5 pt-2">
                            <div class="d-flex px-0 justify-content-between mb-4">
                                <div class="col-4 px-0 d-flex align-items-center">Cantidad</div>
                                <select name="" id="" class="col-8 px-0 py-1 lista">
                                    <option value="">Cantidad</option>
                                </select>
                            </div>
                            <div class="d-flex px-0 justify-content-between mb-4">
                                <div class="col-4 px-0 d-flex align-items-center">Talla</div>
                                <select name="" id="" class="col-8 px-0 py-1 lista">
                                    <option value="">Talla</option>
                                </select>
                            </div>
                            <div class="h5 font-weight-bold color-purple">Precio total: S/.100</div>
                        </div>
                    </div>
                    <div class="right d-flex justify-content-center align-items-center h3 mb-0 text-white">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </div>
            </div>
            <form class="pago mt-0 px-2 pt-4 pb-3 articulo">
                <h3 class="text-center font-weight-bold gray">Resumen del pago</h3>
                <div class="d-flex justify-content-between px-3 mt-4 gray">
                    <p class="h6">Cantidad</p>
                    <p class="h6">4</p>
                </div>
                <div class="d-flex justify-content-between px-3 mt-2 gray">
                    <p class="h6">Envío</p>
                    <p class="h6">S/.20</p>
                </div>
                <div class="d-flex justify-content-between px-3 mt-2 gray">
                    <p class="h6">Total</p>
                    <p class="h6">S/.220</p>
                </div>
                <div class="form-check ml-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Acepto los términos y condiciones</label>
                </div>
                <button type="submit" class="w-100 pagar text-white py-2 h5 mt-3">Realizar pago</button>
            </form>
        </div>
    </main>
@endsection