@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])




<a class="m-5 text-info" href="{{ url('city') }}"> <-Regresar </a>

<div class="card m-5">
    <div class="card-body">

    <div class="mb-3">
    <label for="city_name" class="form-label "> Nombre de la ciudad </label>
    <input type="text" name="city_name" class="form-control" value="{{  isset($city->city_name)? $city->city_name : '' }}"  id="city_name" >
    <div class="mb-3">
    <input type="submit" value="Enviar" class="btn btn-success mt-2">

    </div>
 </div>
