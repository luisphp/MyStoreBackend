@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="col-md-12">

		<h2> Products <span class="pull-right"> <a role="button" class="btn btn-primary float-right" href="{{ route('products.create') }}"> Create </a> </span> </h2>

		<table class="table table-responsive-md" style = "margin: 30px">
				  <thead>
				    <tr>
				      <th scope="col">id</th>
				      <th scope="col">Name</th>
				      <th scope="col">Image</th>
				      <th scope="col">Status</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
 		<tbody>

		@foreach($products as $product)
 
						    <tr>
						      
						      <td>{{$product->id}}</td>
						      <td>{{$product->name}}</td>
						      <td><img src={{$product->photo_1}} class="rounded mx-auto d-block" alt="photo_1" style="width: 50px"></td>

						      @if($product->status == 1)

						      <td><h5> <span class="badge badge-success">Active</span></h5></td>
						      

						      @else

						      <td><h5> <span class="badge badge-secondary">Off</span></h5></td>
						     

						      @endif


						      <td>
						      	
						      	<div class="btn-group">
						      		<a href="{{route('products.show',$product->id)}}" class="btn btn-sm btn-light"> Ver </a>

						      		<a href="{{route('products.edit',$product->id)}}" class="btn btn-sm btn-primary"> Edit </a>

						      		
						      	    	
									 {!! Form::open(['route' => ['products.destroy', $product->id],'method'=>'DELETE']) !!}

									 <button class="btn btn-sm btn-danger">Delete</button>

									 {!! Form::close() !!}

									</div>
								
								</td>

						    </tr>
						    
		@endforeach

			  </tbody>
			</table>

			{{$products->render()}}

		</div>
	</div>
@endsection