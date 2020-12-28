<div class="form-group">
	<label class="control-label" for="category_id">Categoría</label>
	{!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	<label class="control-label" for="name">Nombre:</label>
	{!! 
		Form::text(
			'name', 
			null, 
			['class' => 'form-control to-slug', 'placeholder' => 'Nombre del producto...']
		)
	!!}
</div>

<div class="form-group">
	<label class="control-label" for="slug">Slug:</label>
	{!! Form::text('slug', null, ['class' => 'form-control slug', 'readonly' => 'readonly']) !!}
</div>

<div class="form-group">
	<label class="control-label" for="extract">Extracto:</label>
	{!! Form::text('extract', null, ['class' => 'form-control', 'placeholder' => 'Descripción corta...']) !!}
</div>

<div class="form-group">
	<label class="control-label" for="description">Descripción:</label>
	{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descripción del producto...']) !!}
</div>

<div class="form-group">
	<label class="control-label" for="price">Precio:</label>
	{!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'precio']) !!}
</div>

<div class="form-group">
	<label class="control-label" for="image">Imagen:</label>
	{!! Form::text('image', null, ['class' => 'form-control', 'placeholder' => 'URL de la imagen...']) !!}
</div>

<div class="form-group">
	{!! Form::checkbox('visible', 1, true) !!} Visible
</div>
