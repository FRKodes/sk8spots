@extends('app')

@section('content')
	<div class="container">
		<div class="row profile-up">
			<div class="col-xs-4 col-sm-2 col-md-2 profile-pic">
				<figure><img src="/images/blank-profile-picture.png" alt="{{ $user->username }}"></figure>
			</div>
			<div class="col-xs-8 col-sm-10 col-md-9 col-md-offset-1 info-container">
				<h1 class="username">{{ $user->name }}</h1>
				<div class="bio">
					{{ $user->bio ? : 'Por el momento no están activadas la funciones para personalizar tu perfil, pero pronto agregaremos funciones para que actualices tu perfil, agregues tu foto de perfil, agregues skate spots a tu lista de favoritos, etc.'}}</div>
				<div class="extra-info">
					<p>Skate Spots</p>
					<ul>
						<li><a href="#"><strong>0</strong> Favoritos</a></li>
						<li><a href="#"><strong>0</strong> Agregados</a></li>
						<li><a href="#"><strong>0</strong> Listados</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 line-heading">
				<h2>Favoritos</h2>
				<p>Aquí se muestran los spots que has marcado como favoritos.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12">
				<p class="no-spots">No hay Spots para mostrar ahora.</p>
			</div>

			{{-- @if(count($spots))
				@foreach($spots as $spot)
					<div class="col-xs-6 col-lg-4">
						<h4>{{ $spot->title }}</h4>
						<p>{{ $spot->address }}</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dolore impedit consequatur asperiores saepe corporis fuga, laboriosam at aut natus tempora quibusdam voluptates error itaque nemo dolorum, rerum consequuntur est.</p>
						<p><a class="btn btn-default green-btn" href="{{ url('admin/spot').'/'.$spot->id }}" role="button">Ver detalle &raquo;</a></p>
						<hr>
					</div>
				@endforeach
			@endif --}}
		</div>

		<div class="row">
			<div class="col-xs-12 line-heading">
				<h2>Agregados</h2>
				<p>Aquí se muestran los spots que has agregado en la plataforma.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12">
				<p class="no-spots">No haz agregado ningún Spots hasta ahora.</p>
			</div>

			{{-- @if(count($spots))
				@foreach($spots as $spot)
					<div class="col-xs-6 col-lg-4">
						<h4>{{ $spot->title }}</h4>
						<p>{{ $spot->address }}</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dolore impedit consequatur asperiores saepe corporis fuga, laboriosam at aut natus tempora quibusdam voluptates error itaque nemo dolorum, rerum consequuntur est.</p>
						<p><a class="btn btn-default green-btn" href="{{ url('admin/spot/').'/'.$spot->id }}" role="button">Ver detalle &raquo;</a></p>
						<hr>
					</div>
				@endforeach
			@endif --}}
		</div>

		<div class="row">
			<div class="col-xs-12 line-heading">
				<h2>Listados</h2>
				<p>Aquí se muestran los spots que haz agregado a tus listas.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12">
				<p class="no-spots">No hay Spots para mostrar ahora.</p>
			</div>

			{{-- @if(count($spots))
				@foreach($spots as $spot)
					<div class="col-xs-6 col-lg-4">
						<h4>{{ $spot->title }}</h4>
						<p>{{ $spot->address }}</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dolore impedit consequatur asperiores saepe corporis fuga, laboriosam at aut natus tempora quibusdam voluptates error itaque nemo dolorum, rerum consequuntur est.</p>
						<p><a class="btn btn-default green-btn" href="{{ url('admin/spot/').'/'.$spot->id }}" role="button">Ver detalle &raquo;</a></p>
						<hr>
					</div>
				@endforeach
			@endif --}}
		</div>

	</div>
@endsection