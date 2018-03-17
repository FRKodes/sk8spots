<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h2>Instagram</h2>
			<hr>
		</div>
	</div>
	
	<div class="row">
		@foreach($posts as $post)
			<div class="col-xs-4 col-md-3 col-lg-2 ig-item-container">
				<div class="ig-item">
					<div class="photo">
						<a href="{{ $post->link }}" target="_blank" title="Ver post {{ $post->caption->text }}" style="background-image: url({{ $post->images->low_resolution->url }})">
							<img class="ig-item" src="images/pixel.png" alt="{{ $post->caption->text }}">
						</a>
					</div>
					<div class="info">
						<p>{{ $post->caption->text }}</p>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>