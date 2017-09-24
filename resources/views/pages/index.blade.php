@extends('app')

@section('content')
<div class="container-fluid map">
	<div class="row" id="map">
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 text-center">
			<h1 class="title">¿Conoces un Spot?</h1>
			<a href="{{ url('spot/create') }}" class="btn btn-primary green-btn share" title="¡El conocimiento es poder!">¡Compártelo con la comunidad!</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2 adsense m-bottom-0">
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-6490955290269477"
			     data-ad-slot="1652665079"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</div>


<div class="container spots-list">
	<div class="row">
		<h2 class="text-center verde2 m-top-0 m-bottom-20">¡Últimos Sk8 Spots agregados!</h2>
		@if($lastOnes)
			@foreach($lastOnes as $lastOne)
				<div class="col-sm-4 col-md-3 last-one-home-item">
					
					@if(count($lastOne->images()->get()) != 0)
						<div class="photo" style="background-image: url(https://s3.amazonaws.com/sk8spotsmx/spots/{{ $lastOne->images()->get()->first()->name }})">
							<a href="{{ url('spot').'/'.$lastOne->slug }}"></a>
						</div>
					@else
						<div class="photo no-photo"><a href="{{ url('spot').'/'.$lastOne->slug }}"></a></div>
					@endif
					
					<div class="info">
						<p><a href="{{ url('spot').'/'.$lastOne->slug }}">{{ $lastOne->title }} <span class="verde2">({{ $lastOne->category->name }})</span></a></p>
						<p>Municipio: {{ $lastOne->city->name }}</p>
					</div>
				</div>
			@endforeach
		@endif

	</div>
</div>
@endsection