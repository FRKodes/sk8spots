<div class="container spots-list">
	<div class="row">
		<h2 class="text-center verde2 m-top-0 m-bottom-20">SK8 SPOTS AGREGADOS RECIENTEMENTE</h2>
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