@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
@include('.welcome')

<h2 style="text-align: center;" class="mt-3">  Nueva ciudad  </h2>

<form action="{{ url('/city') }}" method="post">

    @csrf
    @include('city.form')


</form>




