@extends('layouts.header_footer')

@push('css')
    <link rel="stylesheet" href= "{{ asset('css/login.css')}} ">
@endpush

@section('content')

    <main class="d-flex justify-content-center align-items-center py-2 h-100 pt-5">
        <div class="bg-white my-4 shadow">
            <div class="d-flex flex-column align-items-center pt-1">
                <img src="img/avatar.png" class="d-block avatar rounded-circle my-3">
                <h1 class="h3 color-azul">Inicia sesión</h1>
            </div>
            <div class="container pb-3 cont-form">
                <form class="px-3" action="{{route('login')}}" method="POST" >
                    @csrf
                    <div class="d-flex my-4 campos">
                        <i class="fas fa-user col-1 p-0 d-flex justify-content-center align-items-center h3 color-azul"></i>
                        <input type="text" name="username"class="col-11 border-0 outline-none h6 font-weight-normal bg-transparent text-dark" placeholder="Username" value="{{old('username')}}">

                    </div>
                    <div class="d-flex my-4 campos">
                        <i class="fas fa-lock col-1 p-0 d-flex justify-content-center align-items-center h3 color-azul"></i>
                        <input type="password" name="password" class="col-11 border-0 outline-none h6 font-weight-normal bg-transparent" placeholder="Password">
                    </div>

                    <div class="d-flex align-items-center justify-content-center">
                        <button type="submit" class="boton-azul bg-azul py-2 rounded text-light d-inline-block px-5 mb-2">Enviar</button>
                    </div>

                </form>
                @if ($errors->any())
                    <div class="alert alert-danger py-0 px-0">
                        <ul class="my-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="w-100 d-flex justify-content-center align-items-center">
                    <a href="{{route('register')}}" class="p-2">Crear Cuenta</a>
                </div>
            </div>
        </div>
    </main>



    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Iniciar Sesión</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Usuario</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Guardar Contraseña') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
