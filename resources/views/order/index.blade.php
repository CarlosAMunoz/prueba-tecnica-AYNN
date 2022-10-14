@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])

@include('.welcome');

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<h2 style="text-align: center;"> ÓRDENES </h2>

<a  class="btn btn-primary ms-5" href="{{ url('order/create') }}">  + Nueva Orden </a>

<div class="card m-5">
    <div class="card-body">

    <table class="table table-striped" id="ordenes">
        <thead>
            <tr>
                <th scope="col"> Cliente  </th>
                <th scope="col"> Fecha del pedido  </th>
                <th scope="col"> Total </th>
                <th scope="col"> Fecha de envío </th>
                <th scope="col"> Estado  </th>
                <th scope="col"> Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->customers->customer_name}}</td>
                <td>{{ $order->order_date }}</td>
                <td>{{ $order->order_total }}</td>
                <td>{{ $order->order_date_delivery }}</td>
                <td>{{ $order->order_status }}</td>
                <td>

                <a href="{{ url('/order/'.$order->id.'/edit')}}">

                Editar
                </a>

                </td>
                <td>

                <form action="{{ url('/order/'.$order->id )}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Está seguro del eliminar este registro?')" value="Borrar">
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
    $('#ordenes').DataTable();
});
</script>
