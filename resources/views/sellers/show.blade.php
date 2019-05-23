@extends('layouts.app')

@section('content')

	<div class="container">
		
		<div class="col-md-12 col-md-offset-2">

			<div class="row text-center">

				<div class="col-lg-4 col-md-4">

				<h1> {{$seller->name}} </h1>

				</div>
				<div class="col-lg-4 col-md-4">

					@if($seller->status == 1)

					<td><h3> <span class="badge badge-success ">Active</span></h3></td>
							      

					@else

					<td><h3> <span class="badge badge-secondary">Deactivate</span></h3></td>
							     

					@endif

				</div>
				<div class="col-lg-4 col-md-4">

					@if($seller->company_logo)
					<img src={{$seller->company_logo}} class="rounded mx-auto d-block" alt="photo_1" style="width: 50px"></td>
					@else
					<img src="https://png.pngtree.com/svg/20160803/b3b303c89e.svg" class="rounded mx-auto d-block" alt="photo_1" style="width: 50px"></td>
					@endif

				</div>
			</div>
			
			<div class="card" style="margin: 20px">


						<div class="card-body">

							@if($seller->company_logo)

								<div class="text-center">
								  <img src="{{$seller->company_logo}}" class="rounded img-fluid" alt="...">
								</div>

								<hr>

							@endif	

							<div class="row">

							<div class="col-md-6 col-lg-6">

								<strong> Slug: </strong> 

								<p class="card-text text-justify" style="margin: 10px">  {{$seller->slug}} </p> 

								
									
								<strong> Email: </strong>

								<p class="card-text text-justify" style="margin: 10px"> {{$seller->email}} </p>
									
								

								<strong> Commercial Name: </strong>

								<p>{{$seller->commercial_name}}</p>

								

								<strong> Description: </strong>

								<p>{{$seller->description}}</p>

								

								<strong> Rif: </strong>

								<p>{{$seller->rif}}</p>

								

							</div>

								<div class="col-md-6 col-lg-6">

								<strong> Address: </strong>

								<p>{{$seller->address}}</p>

								

								<strong> Manager: </strong>

								<p>{{$seller->manager}}</p>

								

								<strong> Phone Number: </strong>

								<p>{{$seller->phone_number}}</p>

								

								<strong> Bank Account: </strong>

								<p>{{$seller->bank_account}}</p>

								

								<strong> Created at: </strong>

								<p>{{$seller->created_at}}</p>

								

								<strong> Updated at: </strong>

								<p>{{$seller->updated_at}}</p>

								</div>
								</div>

						</div>

				</div>

		</div>

	</div>

@endsection