@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="col-md-12 col-md-offset-2">

		<h2> Categories <span class="pull-right"> <a role="button" class="btn btn-primary float-right" href="{{ route('categories.create') }}"> Create </a> </span> </h2>

		<div class="card">

		<table class="table table-responsive-md text-center table-hover">
				  <thead>
				    <tr>
				      <th scope="col">id_category</th>
				      <th scope="col">Name</th>
				      <th scope="col">Status</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
 		<tbody>

		@foreach($categories as $category)
 
						    <tr>
						      
						      <td>{{$category->id_category}}</td>
						      <td>{{$category->name}}</td>
						      <td>

						      @if($category->status == 1)

						      <td><h5> <span class="badge badge-success">Active</span></h5></td>
						      

						      @else

						      <td><h5> <span class="badge badge-secondary">Off</span></h5></td>
						     

						      @endif


						      <td>
						      	
						      	<div class="btn-group">
						      		<a href="{{route('categories.show',$category->id_category)}}" class="btn btn-sm btn-light"> Ver </a>

						      		<a href="{{route('categories.edit',$category->id_category)}}" class="btn btn-sm btn-primary"> Edit </a>

						      		
						      	    	
									 {!! Form::open(['route' => ['categories.destroy', $category->id_category],'method'=>'DELETE']) !!}

									 <button class="btn btn-sm btn-danger">Delete</button>

									 {!! Form::close() !!}

									</div>
								
								</td>

						    </tr>
						    
		@endforeach

			  </tbody>
			</table>

		

		</div>
		<br>
		<div class="mx-auto d-block col-md-2">

			{{$categories->render()}}

		</div>
	</div>
@endsection