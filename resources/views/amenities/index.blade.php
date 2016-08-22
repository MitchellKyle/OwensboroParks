@extends('layouts.app')

@section('content')
<div class="amenities-header text-center">
	<h1>Park Amenities</h1>
	<p>Below is a list of many of the amenities you can find at a park near you!</p>
</div>	
<ul class="text-center amenities-list">
	@foreach ($amenities as $amenity)
		<li><a href="amenities/{{ $amenity->id }}">{{ $amenity->name }}</a></li>
	@endforeach
</ul>
@stop