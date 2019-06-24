@extends('layouts.app')

@section('content')

	<div class="container">
		
		<div class="col-md-12">

			<h2 > Edit Campaign </h2>

				{!! Form::model($campaign, ['route'=>['campaign.update',$campaign->id],  'method' => 'PUT']) !!}

					@include('campaigns.form')

				{!! Form::close() !!}
			

		</div>

	</div>
						    
			


@endsection