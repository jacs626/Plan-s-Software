@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS <a href="{{ route("product.create")}}" class="btn btn-warning"><i class="fa fa-plus-circle">Producto</i></a>
			</h1>
		</div>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Categoría</th>
							<th>Nombre</th>
							<th>Extracto</th>
							<th>Precio</th>
							<th>Imagen</th>
							<th>Visible</th>
						</tr>
					</thead>
					<tbody>
						@foreach($productos as $product)
							<tr>
								<td>
									<a class="btn btn-primary" href="{{ route('product.edit', $product->slug) }}">
										<i class="fa fa-edit"></i>
									</a>
								</td>
								<td>
									{!! Form::open(['route' => ['product.destroy', $product->slug]]) !!}
										<input type="hidden" name="_method" value="DELETE">
										<button onClick="return confirm('¿Eliminar registro?')" class="btn btn-danger">
											<i class="fa fa-trash"></i>
										</button>
									{!! Form::close() !!}
								</td>
								<td>
									@if ( isset( $product->category->name) )
										{{$product->category->name}}
									@else
										<p>Sin categoria</p>
									@endif
								</td>
								<td>{{ $product->name }}</td>
								<td>{{ $product->extract }}</td>
								<td>${{ $product->price }}</td>
								<td><img src="{{ $product->image }}" width="40"></td>
								<td>{{ $product->visible == 1 ? "Si" : "No" }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>

				<hr>

				<?php echo $productos->render(); ?>
			</div>
		</div>
	</div>
@stop