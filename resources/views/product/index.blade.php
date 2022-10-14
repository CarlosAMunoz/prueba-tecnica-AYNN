@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
@include('.welcome');
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


<h2 style="text-align: center;"> PRODUCTOS </h2>

<a  class="btn btn-primary ms-5" href="{{ url('product/create') }}"> + Nuevo producto </a>



<div class="card m-5">
    <div class="card-body">

    <table class="table table-striped" id="productos">
        <thead>
            <tr>
                <th scope="col">Descripción  </th>
                <th scope="col"> Cantidad disponible </th>
                <th scope="col"> Precio </th>
                <th scope="col"> Estado </th>
                <th scope="col"> Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->product_description }}</td>
                <td>{{ $product->product_amount }}</td>
                <td>{{ $product->product_value }}</td>
                <td>{{ $product->product_status }}</td>
                <td>


                <a href="{{ url('/product/'.$product->id.'/edit')}}">

                Editar
                </a>


                <form action="{{ url('/product/'.$product->id )}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input  type="submit" onclick="return confirm('¿Está seguro del eliminar este registro?')" value="Borrar">
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
    $('#productos').DataTable();
});
</script>
