@extends('app')

@section('content')
	<div class="container">
		<div class="row profile-up">
			<div class="col-xs-5 col-md-4 profile-pic">
				<figure>
					<img src="https://instagram.fgdl1-2.fna.fbcdn.net/t51.2885-19/s150x150/13534422_1557969301172824_720729380_a.jpg" alt="{{ $user->username }}">
				</figure>
			</div>
			<div class="col-xs-7 col-md-8 info-container">
				<h1 class="username">{{ $user->username }}</h1>
				<div class="bio">{{ $user->bio ? : 'No sabemos mucho de tí :/'}}</div>
				<div class="extra-info">
					<p>Skate spots</p>
					<ul>
						<li><a href="#"><strong>12</strong> Favoritos</a></li>
						<li><a href="#"><strong>3</strong> Agregados</a></li>
						<li><a href="#"><strong>7</strong> Listados</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 line-heading">
				<h2>Favoritos</h2>
			</div>
		</div>
		
		<div class="row">
		@if(count($spots))
			@foreach($spots as $spot)
				<div class="col-xs-6 col-lg-4">
					<h4>{{ $spot->title }}</h4>
					<p>{{ $spot->address }}</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dolore impedit consequatur asperiores saepe corporis fuga, laboriosam at aut natus tempora quibusdam voluptates error itaque nemo dolorum, rerum consequuntur est.</p>
					<p><a class="btn btn-default green-btn" href="{{ url('admin/spot').'/'.$spot->id }}" role="button">Ver detalle &raquo;</a></p>
					<hr>
				</div>
			@endforeach
		@endif
		</div>

		<div class="row">
			<div class="col-xs-12 line-heading">
				<h2>Agregados</h2>
			</div>
		</div>
		
		<div class="row">
		@if(count($spots))
			@foreach($spots as $spot)
				<div class="col-xs-6 col-lg-4">
					<h4>{{ $spot->title }}</h4>
					<p>{{ $spot->address }}</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dolore impedit consequatur asperiores saepe corporis fuga, laboriosam at aut natus tempora quibusdam voluptates error itaque nemo dolorum, rerum consequuntur est.</p>
					<p><a class="btn btn-default green-btn" href="{{ url('admin/spot/').'/'.$spot->id }}" role="button">Ver detalle &raquo;</a></p>
					<hr>
				</div>
			@endforeach
		@endif
		</div>

		<div class="row">
			<div class="col-xs-12 line-heading">
				<h2>Listados</h2>
			</div>
		</div>
		
		<div class="row">
		@if(count($spots))
			@foreach($spots as $spot)
				<div class="col-xs-6 col-lg-4">
					<h4>{{ $spot->title }}</h4>
					<p>{{ $spot->address }}</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dolore impedit consequatur asperiores saepe corporis fuga, laboriosam at aut natus tempora quibusdam voluptates error itaque nemo dolorum, rerum consequuntur est.</p>
					<p><a class="btn btn-default green-btn" href="{{ url('admin/spot/').'/'.$spot->id }}" role="button">Ver detalle &raquo;</a></p>
					<hr>
				</div>
			@endforeach
		@endif
		</div>

	</div>
@endsection