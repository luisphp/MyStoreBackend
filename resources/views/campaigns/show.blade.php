@extends('layouts.app')

@section('content')

	<div class="container">
		
		<div class="col-md-12 col-md-offset-2">

			<h1> {{$campaign->name}} </h1>

			
			<div class="card" style="margin: 20px">

						<div class="card-body">

								
								<strong> Description: </strong>

								<p class="card-text text-justify" style="margin: 10px"> {{$campaign->description}} </p>
					
								<hr>

								<strong> Slug: </strong>

								<p>{{$campaign->slug}}</p>

							
						</div>

				</div>

		</div>

	</div>

@endsection