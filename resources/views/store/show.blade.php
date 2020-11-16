@extends('store.template')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i> Detalles del Producto</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="product-block">
                <img src="{{$product->image}}" width="300">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="product-block">
                <h3>{{$product->name}}</h3><hr>
                <div class="product-info">
                    <p>{{$product->description}}</p>
                    <h3><span class="label label-success">Precio: ${{$product->price}}</span></h3>
                    <p>
                        <a class="btn btn-warning btn-block" href="{{ route("cart-add", $product->slug)}}">
                            Lo quiero <i class="fa fa-cart-plus fa-1.5x"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div><hr>

    

    
    <p><a class="btn btn-primary" href="{{route("home")}}">
        <i class="fa fa-chevron-circle-left"></i> regresar</a>
    </p>
</div>
@endsection