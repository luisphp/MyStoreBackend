@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="col-md-12">

			<h2 > Edit Product </h2>

			 

			{!! Form::model($product, ['route'=>['products.update',$product->id_product],  'method' => 'PUT', 'files' => true]) !!}

			@include('products.form')


			{!! Form::close() !!}
			

			</div>
	</div>
						    
			


@endsection