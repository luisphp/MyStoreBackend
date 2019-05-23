@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="col-md-12">

			<h2 > Crear Category </h2>

			{!! Form::open(['route'=>'categories.store']) !!}

			@include('categories.form')


			{!! Form::close() !!}

			</div>
	</div>
						    
			


@endsection