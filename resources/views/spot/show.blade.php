@extends('app')

@section('spot_description', $spot->description)
@section('titlepage', $spot->title)
@section('detail_image', 'https://maps.googleapis.com/maps/api/staticmap?center='.$spot->coords.'&zoom=15&size=600x600&maptype=roadmap&markers='.$spot->coords.'&key=AIzaSyAP9skepfDL3L5pB4oF0Y1eey1BdF2trcI')
@section('url', 'spot/'.$spot->slug)

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
						<p><b class="verde3">Colonia: </b>{{ $spot->neighborhood }}</p>
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
			<div class="container">
				
			@foreach($spot->images as $image)
				<div class="col-xs-6 col-sm-4 col-md-3 image-item">
					<a data-fancybox="spot-gallery" href="https://s3.amazonaws.com/sk8spotsmx/spots/{{ $image->name }}">
						<figure style="background-image: url(https://s3.amazonaws.com/sk8spotsmx/spots/{{ $image->name }})"><img src="" alt=""></figure>
					</a>
				</div>
			@endforeach

			@if(count($spot->images)==0)
				<div class="col-xs-12"><p>Por el momento no hay imágenes de este spot.</p></div>
			@endif
			
			</div>
		</div>
	</div>
@endsection