@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])

@include('.welcome');

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


<h2 style="text-align: center;"> CIUDADES </h2>

<a class="btn btn-primary ms-5" href="{{ url('city/create') }}">  + Nueva ciudad </a>


<div class="card m-5">
    <div class="card-body">


    <table class="table table-striped" id="ciudades" >
        <thead >
            <tr>
                <th scope="col"># </th>
                <th scope="col">Nombre de la ciudad </th>
                <th scope="col" style="text-align: center;"> Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach($cities as $city)
            <tr>
                <td>{{ $city->id }}</td>
                <td>{{ $city->city_name }}</td>
                <td style="text-align: center;">


                <a class="text-primary"  href="{{ url('/city/'.$city->id.'/edit')}}" class="btn">

                Editar
                </a>

                <form action="{{ url('/city/'.$city->id )}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                 <input class="text-danger" type="submit" onclick="return confirm('¿Está seguro del eliminar este registro?')" value="Eliminar">
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"> </script>
<script>
    $(document).ready(function () {
    $('#ciudades').DataTable();
});
</script>

