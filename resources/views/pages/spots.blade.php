@extends('app')

@section('content')
	<div class="container-fluid map">
		<div class="row" id="map">
		</div>
	</div>

	@include('partials.last-spots-added')

	@include('partials.add-spot-button')
@endsection