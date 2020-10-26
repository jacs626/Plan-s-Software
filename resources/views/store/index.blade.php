@extends('store.template')

@section('content')

@include('store/partials.slider')

<div class="container text-center">
    <div id="products">
        @foreach($productos as $producto)
        <div class="product white-panel">
            <h3>{{$producto->name}}</h3><hr>
            <img src="{{$producto->image}}" width="250">
            <div class="product-info panel">
            <p>{{$producto->extract}}</p>
            <h3><span class="label label-success">Precio: ${{$producto->price}}</span></h3>
            <p>
                <a class="btn btn-warning" href="#"><i class="fa fa-cart-plus"></i> Lo quiero</a>
                <a class="btn btn-primary" href="{{route("product-detail",$producto->slug)}}"><i class="fa fa-chevron-circle-right"></i> Leer mas</a>
            </p>
            </div>
        </div>
        @endforeach
    </div>   
</div>
    
@endsection