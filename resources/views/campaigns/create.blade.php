@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="col-md-12">

			<h2 > Crear Campaign </h2>

			{!! Form::open(['route'=>'campaigns.store']) !!}

			@include('campaigns.form')


			{!! Form::close() !!}

			</div>
	</div>
						    
			


@endsection