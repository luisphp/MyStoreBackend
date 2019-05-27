@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="col-md-12 col-md-offset-2">

		<h2> Customer <span class="pull-right"> <a role="button" class="btn btn-primary float-right" href="{{ route('customers.create') }}"> Create </a> </span> </h2>

		<div class="card">

				<table class="table table-responsive-md text-center table-hover">
				
				
				  <thead>
				    <tr>
				      <th scope="col">id_customer</th>
				      <th scope="col">Name</th>
				      <th scope="col">Logo</th>
				      <th scope="col">Status</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  

 		<tbody>

		@foreach($customers as $customer)
 
						    <tr>
						      
						      <td>{{$customer->id_customer}}</td>
						      <td>{{$customer->name}}</td>
						      <td>

						      	@if($customer->company_logo)
						      	<img src={{$customer->company_logo}} class="rounded mx-auto d-block" alt="photo_1" style="width: 50px"></td>
						      	@else
						      	<img src="https://askdeed.com/uploads/logos/default-logo.png" class="rounded mx-auto d-block" alt="photo_1" style="width: 50px"></td>
						      	@endif

						      @if($customer->status == 1)

						      <td class="align-middle"><h5> <span class="badge badge-success">Activate</span></h5></td>
						      

						      @else

						      <td class="align-middle"><h5> <span class="badge badge-secondary">Deactivate</span></h5></td>
						     

						      @endif


						      <td>
						      	
						      	<div class="btn-group">
						      		<a href="{{route('customers.show',$customer->id_customer)}}" class="btn btn-sm btn-light"> Ver </a>

						      		<a href="{{route('customers.edit',$customer->id_customer)}}" class="btn btn-sm btn-primary"> Edit </a>

						      		
						      	    	
									 {!! Form::open(['route' => ['customers.destroy', $customer->id_customer],'method'=>'DELETE']) !!}

									 <button class="btn btn-sm btn-danger">Delete</button>

									 {!! Form::close() !!}

									</div>
								
								</td>

						    </tr>
						    
		@endforeach

			  </tbody>
			</table>
		</div>

		

		</div>
		<div class="mx-auto d-block col-lg-12 text-center">

			{{$customers->render()}}

		</div>
	</div>
@endsection