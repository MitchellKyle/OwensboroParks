@extends('layouts.app')

@section('title')
{{ $amenity->name }} |
@stop

@section('content')
	<div class="amenities-show-header text-center">
		<h1>{{ $amenity->name }}</h1>
	</div>
	<div class="row">
		@foreach ( $amenity->parks as $park )
			<div class="col-sm-6 text-center park-sign">
				<div class="col-sm-12 sign-img-bg round">
					<a href="../parks/{{ $park->id }}"><img src="{{ URL::to('/') }}{{ $park->sign_img }}"></a>
				</div>
				<div class="col-sm-12 sign-link-bg round">
				 	<a href="../parks/{{ $park->id }}">{{ $park->name }}</a>
				</div>
			</div>
	 @endforeach
	</div>
@stop