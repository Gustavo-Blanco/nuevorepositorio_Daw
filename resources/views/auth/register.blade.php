@extends('layouts.header_footer')

@push('css')
    <link rel="stylesheet" href= "{{ asset('css/register.css')}} ">
@endpush

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-azul text-light text-center h2">Crea Tu Cuenta</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <!--<label for="name"
                                class="col-md-4 col-form-label text-md-right">Nombres</label>-->

                            <div class="col">
                                <input id="name" type="text" class="form-control campos @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" placeholder="Nombres" required autocomplete="name"
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <!--<label for="username"
                                class="col-md-4 col-form-label text-md-right">Usuario</label>-->

                            <div class="col">
                                <input id="username" type="text" class="form-control campos @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username') }}" placeholder="Usuario" required autocomplete="username"
                                    autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <!--<label for="email"
                                class="col-md-4 col-form-label text-md-right">Correo Electronico</label>-->

                            <div class="col">
                                <input id="email" type="email" class="form-control campos @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Correo" required
                                    autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!--<label for="password"
                                class="col-md-4 col-form-label text-md-right">Contraseña</label>-->

                            <div class="col">
                                <input id="password" type="password" placeholder="Contraseña"
                                    class="form-control campos @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!--<label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>-->

                            <div class="col">
                                <input id="password-confirm" type="password" class="form-control campos" placeholder="Confirmar Contraseña"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <button type="submit" class="boton-azul bg-azul border-0 py-2 rounded text-light d-inline-block px-5 mb-2">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div
@endsection
