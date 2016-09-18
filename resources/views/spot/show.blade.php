@extends('app')

@section('content')
	<div class="container spot-detail">
		<hr>
		<h1>Spot: {{ $spot->title }}</h1>
		<hr>
		<div class="row">
			<div class="detail-map col-sm-6 col-md-4">
				<img src="https://maps.googleapis.com/maps/api/staticmap?center={{ $spot->coords }}&zoom=15&size=600x600&maptype=roadmap&markers={{ $spot->coords }}&key=AIzaSyAP9skepfDL3L5pB4oF0Y1eey1BdF2trcI" alt="Mapa del spot - {{ $spot->title }}">
			</div>
			<div class="col-sm-6  col-md-8">
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
					@if($spot->user_id)
						<p><b class="verde3">Subido por:</b> {{ $spot->user_id ? : 'N/A'}}</p>
					@endif
						<p>
							<b class="verde3">Tags: </b>
							@foreach(explode(',', $spot->tags) as $tag)
								<a href="/tag/{{ strtolower(trim($tag)) }}"><span class="badge back-verde2 capitalize">{{ trim($tag) }}</span></a>
							@endforeach
						</p>
						<p><b class="verde3">Rating: </b>4.5</p>

					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<h2 class="verde2 col-xs-12">Fotos del spot</h2>
		</div>
		<div class="row spot-images">
			<div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
			<div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
			<div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
			<div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
			<div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
			<div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
		</div>
	</div>
@endsection