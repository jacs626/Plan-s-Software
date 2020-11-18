@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                CATEGORIAS <a href="{{ route("category.create")}}" class="btn btn-warning"><i class="fa fa-plus-circle">Categoria</i></a>
            </h1>
        </div>
        <div class="page">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td><a href="{{route("category.edit",$categoria)}}" class="btn btn-primary"><i class="fa fa-pencil-square"></i></a></td>
                                <td>
                                    {!! Form::open(["route"=>["category.destroy",$categoria]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onClick="return confirm('Eliminar Registro {{$categoria->name}}?')" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                <td>{{$categoria->name}}</td>
                                <td>{{$categoria->description}}</td>
                                <td>{{$categoria->color}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
@endsection