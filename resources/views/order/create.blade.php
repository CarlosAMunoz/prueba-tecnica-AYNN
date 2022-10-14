@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
@include('.welcome');

<h2 style="text-align: center;" class="mt-3"> Nueva orden  </h2>

<a href="{{ url('order') }}"> Regresar </a>


<form>
    @csrf
 <div class="card m-5">
    <div class="card-body">

    <div class="mb-3">
    <label for="customer_id"> Cliente  </label>
    <select  class="form-control" name="customer_id"  value=""  id="customer_id" >
        <option> -- Seleccione una cliente--  </opction>
        @foreach ($customers as $customer)

        <option value="{{ $customer['id'] }}"> {{ $customer['customer_name'] }}</option>
        @endforeach
    </select>
    </div>

    <div class="mb-3">
        <label for="order_date"> Fecha del pedido  </label>
        <input class="form-control" type="date" name="order_date"  value=""  id="order_date" >
    </div>

    <div class="mb-3">
    <label for="order_total"> Total  </label>
    <input class="form-control" type="text" name="order_total"  value=""  id="order_total" >
    </div>

    <div class="mb-3">
        <label for="order_date_delivery"> Fecha de envío  </label>
        <input class="form-control" type="date" name="order_date_delivery"  value=""  id="order_date_delivery" >
    </div>


    <div class="mb-3">
    <label for="order_status"> Estado  </label>
    <select class="form-control" name="" id="order_status" name="order_status"  onchange="changeOption()">
        <option value="Activo"> Activo </option>
        <option value="Inactivo"> Inactivo </option>
    </select>
    </div>

    <div class="mb-3">
    <input class="btn btn-success" type="submit" value="Enviar" id="enviar">
    </div>
    </div>
</div>
</form>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <script>
        var status = 'Activo'

        function changeOption(){
            var texto = document.getElementById("order_status").value;
            status = texto;
        }

        $('form').submit(function(e){
            e.preventDefault();
            var data = $(this).serializeArray();

            data.push({
                name: 'order_status',
                value: status
            });

            console.log(data);

            $.ajax({
                url: '/order',
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
