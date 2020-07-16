$(document).ready(function () {
    var max_fields = 10; //maximum input boxes allowed
    var wrapper = $(".input_talla"); //Fields wrapper
    var add_button = $(".nueva-talla"); //Add button ID

    var x = 1; //initlal text box count


    $(add_button).click(function (e) { //on add input button click
        
        var option = '<option value="talla">Talla</option><option value="s">S</option><option value="m">M</option><option value="l">L</option><option value="xl">Xl</option>';

        $(wrapper).append('<div class="d-flex justify-content-between mt-2 col-12 px-0" ><select name="" class="ml-0 col-5 px-1 py-1">'+option+'</select><input type="text" name="" class="input-background py-1 px-2 border col-5" placeholder="Cantidad"><i class="fas fa-times-circle col-1 remove_field verde-color"></i></div>'); //add input box

    });

    $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text

        e.preventDefault();
        $(this).parent('div').remove();

    });

    $('.boton').on('click',function(e){
        e.preventDefault();
        if(x==1){
            $(this).parent('div').append('<a href="otro.html" class="verde-color otro font-weight-normal w-100 py-2 h5 mt-2 d-block text-center text-decoration-none">Agregar otro color</a>');
            x++;
        }
        
    });
});

