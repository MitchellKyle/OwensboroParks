@extends('layouts.app')

@section('title')
Parks |
@stop

@section('content')
	<div class="text-center parks-header">
		@if ($query = Request::get('q') && $parks->count())
			<h1>Search Results</h1>
		@elseif ($parks->count())
			<h1>All Parks</h1>
			<p>Our parks system is comprised of 26 parks, totaling over 953 acres.</p>
		@else
			<h1>No results matching that search.</h1>
		@endif
	</div>
	<div class="row">
		@foreach ( $parks as $park )
			<div class="col-md-4 text-center park-sign col-sm-6">
				<div class="col-md-12 sign-img-bg round">
					<a href="parks/{{ $park->id }}"><img src="{{ URL::to('/') }}{{ $park->sign_img }}" class="round"></a>
				</div>
				<div class="col-md-12 sign-link-bg round">
					<a href="parks/{{ $park->id }}">
						<h3>{{ $park->name }}</h3>
					</a>
				</div>
			</div>
		@endforeach
	</div>
@stop