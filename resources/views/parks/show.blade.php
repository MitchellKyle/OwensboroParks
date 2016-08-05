@extends('layouts.app')

@section('title')
{{ $park->name }} |
@stop

@section('content')
	<div class="parks-show-header">
		<h1 class="text-center">{{ $park->name }} Park</h1>
	</div>
	<div class="row">
		<div class="col-md-6">
			<img src="{{ URL::to('/') }}{{ $park->img }}" class="round img-responsive">
		</div>
		<div class="col-md-6">
			<div id='map' class="round"></div>
			<p class="text-center">{{ $park->name }} is located at {{ $park->address }}</p>
			<script>
	      var map;
	      var latLng = { {{ $park->location }} }
	      function initMap() {
	        map = new google.maps.Map(document.getElementById('map'), {
	          center: latLng,
	          zoom: 15,
	          scrollwheel: false
	        });

	        var marker = new google.maps.Marker({
	        	position: latLng,
	        	map: map,
	        	title: '{{ $park->name }}'
	        });
	      }
	    </script>
		</div>
	</div>
	<div>
		<h2>About {{ $park->name }}</h2>
		<p>{{ $park->description }}</p>
	</div>
	<div>
		<ul>
			 @foreach ( $park->amenities->lists('name') as $amenity )
			 	<li>{{ $amenity }}</li>
			 @endforeach
		 </ul>
	</div>
@stop

@section('scripts')
	<!-- Google Maps API Script -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtuZlwBYxk3dRtsKW1OVDfxfnzBVlQxTU&callback=initMap">
	</script>
@stop