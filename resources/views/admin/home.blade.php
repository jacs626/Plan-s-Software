@extends('admin.template')

@section('content')
    
    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-rocket"></i> Adela Costuras - DASHBOARD</h1>
        </div>

        <h2>Biendevenid@ al Panel de Administracion de tu tienda online</h2><hr>

        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{route("category.index")}}" class="btn btn-warning btn-block btn-home-admin">
                    CATEGORIAS</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-shopping-cart icon-home"></i>
                    <a href="{{route("product.index")}}" class="btn btn-warning btn-block btn-home-admin">
                    PRODUCTOS
                    </a>
                </div>
            </div>


        </div>

    </div>
@endsection