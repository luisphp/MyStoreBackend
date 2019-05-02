@extends('layouts.app')

@section('content')

	<div class="container">
		
		<div class="col-md-12 col-md-offset-2">

			<h1> {{$product->name}} </h1>

			
			<div class="card" style="margin: 20px">

				<div class="card-head" style="margin: 20px">

					<strong> Categoría: </strong> 

								<p>  {{$product->category->name}} </p> 

								<hr>

							</div>				

						<div class="card-body">

							@if($product->photo_1)

								<img src="{{$product->photo_1}}" class="img-fluid">

							@endif	
						

								<p class="card-text text-justify" style="margin: 10px"> {{$product->description}} </p>

								<hr>

								{!!  $product->bullets  !!}

					
								<hr>

								<strong> Precio: </strong>

								<p>{{$product->price}}</p>

								<hr>

								<strong> Stock: </strong>

								<p>{{$product->stock}}</p>

						</div>

				</div>

		</div>

	</div>

@endsection