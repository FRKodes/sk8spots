@extends('app')

@section('content')
	<div class="container spot-detail">
		<hr>
		<h1>Spot: {{ $spot->title }}</h1>
		<hr>
		<div class="row">
			<div class="detail-map col-sm-6 col-lg-5">
				<img src="https://maps.googleapis.com/maps/api/staticmap?center={{ $spot->coords }}&zoom=15&size=600x600&maptype=roadmap&markers={{ $spot->coords }}&key=AIzaSyAP9skepfDL3L5pB4oF0Y1eey1BdF2trcI" alt="Mapa del spot - {{ $spot->title }}">
			</div>
			<div class="col-sm-6 col-lg-7">
				<p><b class="verde3">Descripción: </b>{!! nl2br($spot->description) !!}</p>
				<div class="row">
						<div class="col-md-6">
							<p><b class="verde3">Dirección: </b>{{ $spot->address }}</p>
							<p><b class="verde3">Colinia: </b>{{ $spot->neighborhood }}</p>
							<p><b class="verde3">Ciudad: </b>{{ $spot->city->name }}</p>
							<p><b class="verde3">Estado: </b>{{ $spot->state->name }}</p>
							<p><b class="verde3">País: </b>{{ $spot->country->name }}</p>
							<p><b class="verde3">Categoría: </b>{{ $spot->category->name }}</p>
							
						</div>
						<div class="col-md-6">
							<p><b class="verde3">Subido por:</b> {{ $spot->user_id ? : 'N/A'}}</p>
							<p><b class="verde3">Tags: </b>{{ $spot->tags }}</p>
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection