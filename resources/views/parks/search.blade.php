@extends('layouts.app')

@section('content')
	@foreach( $results as $result)
		{{ $result }}
	@endforeach
@stop