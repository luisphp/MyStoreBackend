@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="col-md-12">

			<h2 > Crear Seller </h2>

			<div class="card">

			{!! Form::open(['route'=>'sellers.store', 'files' => true]) !!}

			@include('sellers.form')


			{!! Form::close() !!}

			</div>

			</div>
	</div>
						    
			


@endsection