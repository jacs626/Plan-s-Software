@extends('admin.template')

@section('content')
    
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                PRODUCTOS <small>[Editar Producto]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">

					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::model($product, ['route' => ['product.update', $product->slug]]) !!}

						<input type="hidden" name="_method" value="PUT">

						@include('admin.product.partials.form-product')

						<p>
							{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
							<a href="{{ route('product.index') }}" class="btn btn-warning">Cancelar</a>
						</p>

					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
