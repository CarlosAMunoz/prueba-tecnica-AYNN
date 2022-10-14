@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
@include('.welcome');


<a href="{{ url('product') }}"> <- Regresar </a>

<form>
    @csrf



<div class="card m-5">
    <div class="card-body">


    <div class="mb-3">
        <label for="product_description"> Descripción  </label>
        <input class="form-control" type="text" name="product_description"  value="{{  isset($product->product_description)? $product->product_description : '' }}"  id="product_description" >
    </div>

    <div class="mb-3">
    <label for="product_amount"> Cantidad disponible  </label>
    <input class="form-control"type="text" name="product_amount"  value="{{  isset($product->product_amount)? $product->product_amount : '' }}"  id="product_amount" >
    </div>

    <div class="mb-3">
        <label for="product_value"> Precio  </label>
        <input class="form-control"type="text" name="product_value"  value="{{  isset($product->product_value)? $product->product_value : '' }}"  id="product_value" >
    </div>


    <div class="mb-3">
    <label for="product_status"> Estado  </label>
    <select class="form-control"id="product_status" name="product_status" value=""  onchange="changeOption()">
        <option value="Activo"> Activo </option>
        <option value="Inactivo"> Inactivo </option>
    </select>
    </div>


    <input class="btn btn-success" type="submit" value="Enviar" id="enviar">


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <script>
        var status = 'Activo'

        function changeOption(){
            var texto = document.getElementById("product_status").value;
            status = texto;
        }

        $('form').submit(function(e){
            e.preventDefault();
            var data = $(this).serializeArray();

            data.push({
                name: 'product_status',
                value: status
            });

            console.log(data);

            $.ajax({
                url: '/product',
                type: 'POST',
                dataType: 'json',
                data: data
            })
            .done(function(){
                alert("Registro guardado correctamente")
            })
            .fail(function(){
                alert("Error")
            })
            .always(function(){
                console.log("done")
            });
        });


    </script>



</form>
