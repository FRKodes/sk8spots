@extends('app')

@section('content')
	<div class="container">
		<h1>Spot: {{ $spot->title }}</h1>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
				{{ $spot->title }}
			</div>
		</div>
	</div>
@endsection