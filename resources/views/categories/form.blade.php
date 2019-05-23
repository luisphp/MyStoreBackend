
<div class="container">
<!-- Campo oculto el cual captura automaticamente el user_id del usuario que esta logeado--> 


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


<!-- Boton para cargar información -->
<div>
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


</div>

