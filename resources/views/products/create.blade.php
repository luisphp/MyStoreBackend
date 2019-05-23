@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="col-md-12">

			<h2 > Crear Producto </h2>

			{!! Form::open(['route'=>'products.store', 'files' => true]) !!}

			@include('products.form')


			{!! Form::close() !!}

			</div>
	</div>
						    
			


@endsection