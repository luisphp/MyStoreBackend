
<div class="container" style="margin-top: 30px;">
<!-- Campo oculto el cual captura automaticamente el user_id del usuario que esta logeado--> 



<div class="row">

	<div class="col-lg6 col-md-6">

<!-- Nombre del Producto -->
<div class="form-group">
	{{ Form::label('name', 'Nombre del Seller') }}
	{{ Form::text('name', null , ['class' => 'form-control', 'id'=>'name']) }}
</div>


<!-- Slug o URL amigable -->
<div class="form-group">
	{{ Form::label('slug', 'Slug') }}
	{{ Form::text('slug', null , ['class' => 'form-control', 'id'=>'slug']) }}
</div>


<!-- Email -->
<div class="form-group">
	{{ Form::label('email', 'Email') }}
	{{ Form::text('email', null , ['class' => 'form-control', 'id'=>'email']) }}
</div>


<!-- Nombre Comercial -->
<div class="form-group">
	{{ Form::label('commercial_name', 'Commercial Name') }}
	{{ Form::text('commercial_name', null , ['class' => 'form-control', 'id'=>'commercial_name']) }}
</div>


<!-- Descripcion del Producto  -->
<div class="form-group">
	{{ Form::label('description', 'Description') }}
	{{ Form::textarea('description', null , ['class' => 'form-control', 'id'=>'description', 'rows' => '2']) }}
</div>



</div>

<div class="col-lg6 col-md-6">

<!-- Bullets del Producto  -->
<div class="form-group">
	{{ Form::label('rif', 'RIF') }}
	{{ Form::text('rif', null , ['class' => 'form-control', 'id'=>'rif']) }}
</div>

<!-- Direcicon / Address -->
<div class="form-group">
	{{ Form::label('address', 'Address') }}
	{{ Form::text('address', null, ['class' => 'form-control', 'id'=>'address']) }}
</div>


<!-- Persona de contacto -->
<div class="form-group">
	{{ Form::label('manager', 'Manager') }}
	{{ Form::text('manager', null, ['class' => 'form-control', 'id'=>'manager']) }}
</div>


<!--  Numero de telefono -->
<div class="form-group">
	{{ Form::label('bank_account', 'Phone Number') }}
	{{ Form::text('phone_number', null, ['class' => 'form-control', 'id'=>'phone_number']) }}
</div>


<!-- Bank Account -->
<div class="form-group">
	{{ Form::label('bank_account', 'Bank Account') }}
	{{ Form::text('bank_account', null, ['class' => 'form-control', 'id'=>'phone_number']) }}
</div>


<!-- Imagen -->
<div class="form-group">
	{{ Form::label('company_logo', 'Company Logo') }}
	{{ Form::file('company_logo') }}
</div>



</div>
</div>

<!-- Boton para cargar información -->

<div class="card-footer">
	{{ Form::submit('Guardar', ['class' => 'btn btn-primary mx-auto d-block btn-lg']) }}
</div>




</div>

