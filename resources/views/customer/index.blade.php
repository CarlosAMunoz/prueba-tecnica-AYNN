@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
@include('.welcome');

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<h2 style="text-align: center;"> CLIENTES </h2>

<a  class="btn btn-primary ms-5" href="{{ url('customer/create') }}">  + Nuevo cliente </a>


<div class="card m-5">
    <div class="card-body">

    <table class="table table-striped" id="clientes">
        <thead>
            <tr>
                <th scope="col">Identificación </th>
                <th scope="col"> Nombre  </th>
                <th scope="col"> Fecha de nacimiento </th>
                <th scope="col"> Dirección </th>
                <th scope="col"> Teléfono </th>
                <th scope="col"> Ciudad </th>
                <th scope="col"> Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->customer_id_number }}</td>
                <td>{{ $customer->customer_name }}</td>
                <td>{{ $customer->customer_birth_date }}</td>
                <td>{{ $customer->customer_address }}</td>
                <td>{{ $customer->customer_phone }}</td>
                <td>{{ $customer->cities->city_name }}</td>
                <td>

                <a href="{{ url('/customer/'.$customer->id.'/edit')}}">

                Editar
                </a>

                </td>
                <td>

                <form action="{{ url('/customer/'.$customer->id )}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input class="text-danger" type="submit" onclick="return confirm('¿Está seguro del eliminar este registro?')" value="Borrar">
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
    $('#clientes').DataTable();
});
</script>
