@extends('layouts.app')

@section('content')

	<div class="container">
		
		<div class="col-md-12 col-md-offset-2">

			<h1> Campaña: <h4> {{$campaign->name}} </h4></h1>
			

			
			<div class="card" style="margin: 20px">

						<div class="card-body">

							@if($campaign->banner_1)


								<div id="carouselExampleIndicators" class="carousel slide mx-auto d-block" style="width: 800px;" data-ride="carousel" >
									  <ol class="carousel-indicators">
									    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									  </ol>
									  <div class="carousel-inner">
									    <div class="carousel-item active">
									      <img src="{{$campaign->banner_1}}" class="rounded mx-auto d-block" alt="...">
									    </div>
									    <div class="carousel-item">
									      <img src="{{$campaign->banner_2}}" class="rounded mx-auto d-block" alt="...">
									    </div>
									    <div class="carousel-item">
									      <img src="{{$campaign->banner_3}}" class="rounded mx-auto d-block" alt="...">
									    </div>
									  </div>
									  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
									    <span class="sr-only">Previous</span>
									  </a>
									  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									    <span class="carousel-control-next-icon" aria-hidden="true"></span>
									    <span class="sr-only">Next</span>
									  </a>
									</div>

							@endif	

								
								<strong> Description: </strong>

								<p class="card-text text-justify" style="margin: 10px"> {{$campaign->description}} </p>
					
								<hr>

								<strong> Slug: </strong>

								<p>{{$campaign->slug}}</p>

								<hr>

								<strong> Items: </strong>

								<p>{{$campaign->items}}</p>

							
						</div>

				</div>

		</div>

	</div>

@endsection