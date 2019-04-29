
<div class="container">
<!-- Campo oculto el cual captura automaticamente el user_id del usuario que esta logeado--> 




<!-- Lista de Categorias -->

<div class="form-group">
	{{ Form::label('category_id', 'Categorias') }}
	{{ Form::select('category_id', $categories , null,['class' => 'form-control']) }}
</div>

<!-- Nombre del Producto -->

<div class="form-group">
	{{ Form::label('name', 'Nombre del Producto') }}
	{{ Form::text('name', null , ['class' => 'form-control', 'id'=>'name']) }}
</div>

<!-- Slug o URL amigable -->

<div class="form-group">
	{{ Form::label('slug', 'URL') }}
	{{ Form::text('slug', null , ['class' => 'form-control', 'id'=>'slug']) }}
</div>

<!-- Precio -->

<div class="form-group">
	{{ Form::label('price', 'Precio') }}
	{{ Form::text('price', null , ['class' => 'form-control', 'id'=>'price']) }}
</div>

<!-- Stock -->

<div class="form-group">
	{{ Form::label('stock', 'Stock') }}
	{{ Form::text('stock', null , ['class' => 'form-control', 'id'=>'stock']) }}
</div>


<!-- Descripcion del Producto  -->
<div class="form-group">
	{{ Form::label('body', 'Cuerpo del Post') }}
	{{ Form::textarea('body', null , ['class' => 'form-control', 'id'=>'body', 'rows' => '4']) }}
</div>

<!-- Bullets del Producto  -->
<div class="form-group">
	{{ Form::label('bullets', 'Bullets del Producto') }}
	{{ Form::textarea('bullets', null , ['class' => 'form-control', 'id'=>'bullets', 'rows' => '3']) }}
</div>

<!-- SKU -->

<div class="form-group">
	{{ Form::label('SKU', 'SKU') }}
	{{ Form::text('SKU', null , ['class' => 'form-control ', 'id'=>'SKU']) }}
</div>


<!-- Status  -->
<div class="form-group">
	{{ Form::label('status', 'Status: ') }}
	<label>
	{{ Form::radio('status', '1') }} Active
	</label>
	<label>
	{{ Form::radio('status', '0') }} Deactive
	</label>
</div>


<!-- Seller -->
<div class="form-group">
	{{ Form::label('seller_id', 'Seller') }}
	{{ Form::select('seller_id', $sellers , null,['class' => 'form-control']) }}
</div>





<!-- Imagen -->
<div class="form-group">
	{{ Form::label('photo_1', 'Imagen 1') }}
	{{ Form::file('photo_1') }}
</div>

<!-- Imagen -->
<div class="form-group">
	{{ Form::label('photo_2', 'Imagen 2') }}
	{{ Form::file('photo_2') }}
</div>

<!-- Imagen -->
<div class="form-group">
	{{ Form::label('photo_3', 'Imagen 3') }}
	{{ Form::file('photo_3') }}
</div>


<!-- Boton para cargar información -->
<div>
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


</div>

