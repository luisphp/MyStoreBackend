@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="col-md-12">

			<h2 > Edit Seller </h2>

			 

			{!! Form::model($seller, ['route'=>['sellers.update',$seller->id_seller],  'method' => 'PUT', 'files' => true]) !!}

			@include('sellers.form')


			{!! Form::close() !!}
			

			</div>
	</div>
						    
			


@endsection