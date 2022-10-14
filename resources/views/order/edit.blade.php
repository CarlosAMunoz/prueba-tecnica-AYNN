@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
<h2 style="text-align: center;" class="mt-3"> Editar orden  </h2>

<form  action="{{ url('/order/'.$order->id)  }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('order.create');
</form>

