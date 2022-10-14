@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])


<form  action="{{ url('/product/'.$product->id)  }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('product.create');
</form>


