@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
@include('.welcome');
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


<h2 style="text-align: center;"> DETALLES DE ÓRDENES </h2>



<div class="card m-5">
    <div class="card-body">

    <table class="table table-striped" id="details">
        <thead>
            <tr>
                <th scope="col"> Cliente  </th>
                <th scope="col"> Producto </th>
                <th scope="col"> Fecha del pedido  </th>
                <th scope="col"> Total </th>
                <th scope="col"> Fecha de envío </th>
                <th scope="col"> Estado  </th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
        </tbody>
    </table>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"> </script>
<script>
    $(document).ready(function () {
    $('#details').DataTable();
});
</script>
