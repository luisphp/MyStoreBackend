@extends('layouts.app')

@section('content')

	<div class="container">
		
		<div class="col-md-12">

			<h2 > Edit Category </h2>

			 

			{!! Form::model($category, ['route'=>['categories.update',$category->id_category],  'method' => 'PUT']) !!}

			@include('categories.form')


			{!! Form::close() !!}
			

			</div>
	</div>
						    
			


@endsection