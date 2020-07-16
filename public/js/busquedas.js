$(document).ready(function(){
    $('#tipo').on('change',function(){
        //var tipo = $('#codigo').text()
        //var categoria = $('#categoria').text();
        var id_tipo = $(this).val();
        //console.log(categoria)
        console.log(id_tipo)
        if (id_tipo==0){
            a = 1;
        }else{
            $.get('/busquedas/subfiltroTipo',{v_id_tipo:id_tipo},function(data){
                console.log(data)
                $('#cont_productos').empty();
                data[0].forEach(function(valor){
                    console.log(valor)
                    $('#cont_productos').append(
                        '<div class="catalogo d-flex flex-column py-0 mb-3 mr-0 mx-3">'+
                            '<a href="/'+valor.categoria+'/info/'+valor.id+'" class="overflow-hidden d-flex justify-content-center align-items-center">'+
                                '<img src="/img/productos/'+valor.img+'" ></a>'+
                            '<div class="catalogo-inferior px-2 pt-1">'+
                                '<p class="my-0 h4 gray">'+valor.nombre+' '+valor.linea+'</p>'+
                                '<p class="my-2">'+valor.color+'</p>'+
                            '</div>'+
                            '<div class="precio background-purple text-white d-flex align-items-center justify-content-center h3 m-0">S/. '+valor.precio+'</div>'+
                        '</div>'
                    );
                    
                });
                
            });
        }
        
    });

    $('#genero').on('change',function(){
        //var tipo = $('#codigo').text()
        //var categoria = $('#categoria').text();
        var genero = $(this).val();
        //console.log(categoria)
        $.get('/busquedas/subfiltroGenero',{v_genero:genero},function(data){
            console.log(data)
            $('#cont_productos').empty();
            data[0].forEach(function(valor){
                console.log(valor)
                $('#cont_productos').append(
                    '<div class="catalogo d-flex flex-column py-0 mb-3 mr-0 mx-3">'+
                        '<a href="/'+valor.categoria+'/info/'+valor.id+'" class="overflow-hidden d-flex justify-content-center align-items-center">'+
                            '<img src="/img/productos/'+valor.img+'" ></a>'+
                        '<div class="catalogo-inferior px-2 pt-1">'+
                            '<p class="my-0 h4 gray">'+valor.nombre+' '+valor.linea+'</p>'+
                            '<p class="my-2">'+valor.color+'</p>'+
                        '</div>'+
                        '<div class="precio background-purple text-white d-flex align-items-center justify-content-center h3 m-0">S/. '+valor.precio+'</div>'+
                    '</div>'
                );
                
            });
            
        });
        
    });

    $('#color').on('change',function(){
        //var tipo = $('#codigo').text()
        //var categoria = $('#categoria').text();
        var color = $(this).val();
        //console.log(categoria)

        if (color==0){
            a = 1;
        }else{
            $.get('/busquedas/subfiltroColor',{v_color:color},function(data){
                console.log(data)
                $('#cont_productos').empty();
                data[0].forEach(function(valor){
                    console.log(valor)
                    $('#cont_productos').append(
                        '<div class="catalogo d-flex flex-column py-0 mb-3 mr-0 mx-3">'+
                            '<a href="/'+valor.categoria+'/info/'+valor.id+'" class="overflow-hidden d-flex justify-content-center align-items-center">'+
                                '<img src="/img/productos/'+valor.img+'" ></a>'+
                            '<div class="catalogo-inferior px-2 pt-1">'+
                                '<p class="my-0 h4 gray">'+valor.nombre+' '+valor.linea+'</p>'+
                                '<p class="my-2">'+valor.color+'</p>'+
                            '</div>'+
                            '<div class="precio background-purple text-white d-flex align-items-center justify-content-center h3 m-0">S/. '+valor.precio+'</div>'+
                        '</div>'
                    );
                    
                });
                
            });
        }
        
        
    });

    $('#talla').on('change',function(){
        //var tipo = $('#codigo').text()
        //var categoria = $('#categoria').text();
        var talla = $(this).val();
        //console.log(categoria)
        if (talla==0){
            a = 1;
        }else{
            $.get('/busquedas/subfiltroTalla',{v_talla:talla},function(data){
                console.log(data)
                $('#cont_productos').empty();
                data[0].forEach(function(valor){
                    console.log(valor)
                    $('#cont_productos').append(
                        '<div class="catalogo d-flex flex-column py-0 mb-3 mr-0 mx-3">'+
                            '<a href="/'+valor.categoria+'/info/'+valor.id+'" class="overflow-hidden d-flex justify-content-center align-items-center">'+
                                '<img src="/img/productos/'+valor.img+'" ></a>'+
                            '<div class="catalogo-inferior px-2 pt-1">'+
                                '<p class="my-0 h4 gray">'+valor.nombre+' '+valor.linea+'</p>'+
                                '<p class="my-2">'+valor.color+'</p>'+
                            '</div>'+
                            '<div class="precio background-purple text-white d-flex align-items-center justify-content-center h3 m-0">S/. '+valor.precio+'</div>'+
                        '</div>'
                    );
                    
                });
                
            });
        }        
    });

    $('#orden').on('change',function(){
        //var tipo = $('#codigo').text()
        //var categoria = $('#categoria').text();
        var orden = $(this).val();
        //console.log(categoria)
        if (orden==0){
            a = 1;
        }else{
            $.get('/busquedas/subfiltroOrden',{v_orden:orden},function(data){
                console.log(data)
                $('#cont_productos').empty();
                data[0].forEach(function(valor){
                    console.log(valor)
                    $('#cont_productos').append(
                        '<div class="catalogo d-flex flex-column py-0 mb-3 mr-0 mx-3">'+
                            '<a href="/'+valor.categoria+'/info/'+valor.id+'" class="overflow-hidden d-flex justify-content-center align-items-center">'+
                                '<img src="/img/productos/'+valor.img+'" ></a>'+
                            '<div class="catalogo-inferior px-2 pt-1">'+
                                '<p class="my-0 h4 gray">'+valor.nombre+' '+valor.linea+'</p>'+
                                '<p class="my-2">'+valor.color+'</p>'+
                            '</div>'+
                            '<div class="precio background-purple text-white d-flex align-items-center justify-content-center h3 m-0">S/. '+valor.precio+'</div>'+
                        '</div>'
                    );
                    
                });
                
            });
        }        
    });
});