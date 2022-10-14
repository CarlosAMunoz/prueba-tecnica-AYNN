@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
@include('.welcome')
<h2 style="text-align: center;" class="mt-3">  Editar ciudad  </h2>
<form action="{{ url('/city/'.$city->id)  }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('city.form')

</form>
