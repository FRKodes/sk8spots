@extends('app')

@section('content')
	<div class="container spot-detail">
		<hr>
		<h1>Spot: {{ $spot->title }}</h1>
		<hr>
		<div class="row">
			<div class="detail-map col-sm-6 col-md-4">
				<a href="http://maps.google.com/maps?&z=14&q={{ $spot->coords }}&ll={{ $spot->coords }}" target="_blank">
					<img src="https://maps.googleapis.com/maps/api/staticmap?center={{ $spot->coords }}&zoom=15&size=600x600&maptype=roadmap&markers={{ $spot->coords }}&key=AIzaSyAP9skepfDL3L5pB4oF0Y1eey1BdF2trcI" alt="Mapa del spot - {{ $spot->title }}">
				</a>
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
						<p><b class="verde3">Subido por:</b> {{ $spot->user_id ? $spot->user->username : 'N/A'}}</p>
					@endif
						<p>
							<b class="verde3">Tags: </b>
							@if(!$spot->tags)
								N/A
							@else
								@foreach(explode(',', $spot->tags) as $tag)
									<a href="/tag/{{ strtolower(trim($tag)) }}"><span class="badge back-verde2 capitalize">{{ trim($tag) }}</span></a>
								@endforeach
							@endif

						</p>
						<p><b class="verde3">Rating: </b>N/A</p>

					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<h2 class="verde2 col-xs-12">Fotos del spot</h2>
		</div>
		<div class="row spot-images">
			<div class="col-xs-12">
				<p>Por el momento no hay imágenes de este spot.</p>
			</div>
			
			{{-- <div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
			<div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
			<div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
			<div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
			<div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
			<div class="col-xs-6 col-md-4 image-item"><img src="https://dummyimage.com/300x200/000/fff" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></div>
			 --}}
		</div>
	</div>
@endsection