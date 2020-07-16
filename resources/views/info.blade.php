@extends('layouts.header_footer')

@push('css')
    <link rel="stylesheet" href=" {{ asset('css/info.css') }}">
@endpush

@section('content')
<main>
    <div>
        <div class="container-rpa p-5 mt-4 mb-4 d-flex justify-content-center align-items-start">
            <div class="img-info d-flex justify-content-center align-items-center mr-2 shadow">
                <img src="/img/productos/{{$producto[0]->img}}">
            </div>
            <div class="contenido-ropa shadow px-3 ml-2 py-2">
                <p  id="categoria" class="d-none">{{$categoria}}</p>
                <p  id="codigo" class="d-none">{{$producto[0]->id}}</p>
                <h3 class="h3 font-weight-bold gray">{{ $producto[0]->tipo }} {{ $producto[0]->linea }}</h3>
                <div class="h6 font-weight-normal gray d-flex my-3 mx-0">Color {{ $producto[0]->color }}</div>
                <div class="h6 font-weight-normal gray d-flex m-0">Código: {{ $producto[0]->id }}</div>
                <p class="my-2 gray">Otros colores</p>
                
                <div class="otros d-flex justify-content-start">
                    @foreach ($otros as $o)
                        <a href="/{{$categoria}}/info/{{$o->id}}" class="mr-1 d-flex justify-content-center align-items-center">
                            <img src="/img/productos/{{ $o->img }}">
                        </a>
                    @endforeach
                </div>
                <p class="mt-3 mb-3 h2 gray">S/. {{ $producto[0]->precio }}</p>

                <form action="">
                    {{-- <p>{{$detalles[0]->id}}</p> --}}
                    <div class="contenedor-select d-flex justify-content-between px-0">
                        <select class="p-1  mr-2 w-50" id="size">
                            <option value="0">Talla</option>
                            @foreach ($detalles as $talla)
                                <option value="{{$talla->talla}}">{{$talla->talla}}</option>
                            @endforeach
                        </select>
                        <select class="p-1 w-50 ml-2" id="stock">
                            <option value="0">Cantidad</option>
                        </select>
                    </div>
                    <button class="w-100 boton-morado background-purple text-white h4 font-weight-normal py-2 mt-3" type="submit">
                        <a href="{{route('productos.addToCart', [$producto[0]->id])}}"></a>
                        Agregar al carrito</button>
                </form>

            </div>
        </div>
    </div>
</main>


@endsection

@push('js')
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script>

    $(document).ready(function(){
        $('#size').on('change',function(){
            var codigo = $('#codigo').text()
            var talla = $(this).val();

            $.get('/size/stock',{v_codigo:codigo,v_talla:talla},function(data){
                //console.log('funciona');
                //console.log(data[0].stock);
                $('#stock').empty();
                var v_data = parseInt(data[0].stock);
                if (v_data==0){
                    $('#stock').append('<option value="'+index+'">'+index+'</option>');
                }
                else{
                    for (var index = 1; index <= v_data; index++) {
                    $('#stock').append('<option value="'+index+'">'+index+'</option>');

                }
            }

            });
        });
    });


</script>

@endpush

