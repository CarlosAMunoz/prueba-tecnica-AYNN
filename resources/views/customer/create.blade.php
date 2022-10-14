@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])

@include('.welcome');

<h2 style="text-align: center;" class="mt-3">  Nuevo cliente  </h2>

<a class="m-5 text-info" href="{{ url('customer') }}"> <- Regresar </a>

<form>

    @csrf
 <div class="card m-5">
    <div class="card-body">


    <div class="mb-3">
        <label for="city_name"> Número de identificación </label>
        <input class="form-control" type="text" name="customer_id_number"  value="{{  isset($customer->city_name)? $customer->customer_id_number : '' }}"  id="customer_id_number" >
    </div>

    <div class="mb-3">
        <label for="city_name"> Nombre </label>
        <input  class="form-control" type="text" name="customer_name"  value="{{  isset($customer->city_name)? $customer->customer_name : '' }}"  id="customer_name" >
    </div>

    <div class="mb-3">
        <label for="city_name"> Fecha de nacimiento </label>
        <input class="form-control" type="date" name="customer_birth_date"  value="{{  isset($customer->city_name)? $customer->customer_birth_date : '' }}"  id="customer_birth_date" >
    </div>

    <div class="mb-3">
        <label for="city_name"> Dirección </label>
        <input  class="form-control" type="text" name="customer_address"  value="{{  isset($customer->city_name)? $customer->customer_address : '' }}"  id="customer_address" >
    </div>

    <div class="mb-3">
        <label for="city_name"> Teléfono </label>
        <input  class="form-control" type="text" name="customer_phone"  value="{{  isset($customer->city_name)? $customer->customer_phone : '' }}"  id="customer_phone" >
    </div>


    <div class="mb-3">
    <label for="city_name"> Ciudad  </label>


    <select  class="form-control" name="city_id"  value=""  id="city_id" >
        @foreach ($cities as $city)
        <option value="{{ $city['id'] }}"> {{ $city['city_name'] }}</option>
        @endforeach
    </select>
    </div>

    <div class="mb-3">
        <input class="btn btn-success mt-2" type="submit" value="Enviar">
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <script>
        var status = 'Activo'


        $('form').submit(function(e){
            e.preventDefault();
            var data = $(this).serializeArray();

            console.log(data);

            $.ajax({
                url: '/customer',
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

    </div>
 </div>


</form>



