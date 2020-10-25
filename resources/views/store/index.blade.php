<h1>Listado de Productos</h1>
@foreach($productos as $producto)
    <h3>{{$producto->name}}</h3>
<img src="{{$producto->image}}" width="250">
@endforeach