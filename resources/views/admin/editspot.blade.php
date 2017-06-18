@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
			<hr>
			<h1 class="title">Editar info del Spot</h1>
			<hr>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

			{!! Form::open(['url'=>'admin/spot/'.$spot->id, 'id'=>'submitForm', 'method'=>'patch']) !!}
			<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
			    {!! Form::text('title', $spot->title, ['class' => 'form-control', 'placeholder'=>'Escribe el título del spot', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('title') }}</small>
			</div>
			<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
			    {!! Form::text('address', $spot->address, ['class' => 'form-control', 'placeholder'=>'Agrega la dirección. Ej. Av. Vallarta 1234', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('address') }}</small>
			</div>
			<div class="form-group{{ $errors->has('neighborhood') ? ' has-error' : '' }}">
			    {!! Form::text('neighborhood', $spot->neighborhood, ['class' => 'form-control', 'placeholder'=>'Colonia Ej. Arcos Vallarta',  'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('neighborhood') }}</small>
			</div>

			<div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
				<select name="city_id" id="city_id" class="form-control" required="required">
					<option value="">Selecciona una ciudad...</option>
					@foreach($cities as $city)
						<option value="{{ $city->id }}" @if($city->id == $spot->city_id) selected="selected" @endif data-state="{{ $city->state->name }}" data-state-id="{{ $city->state->id }}" >{{ $city->name }} ({{ $city->state->short_name }})</option>
					@endforeach
					<option value="otra" data-state-id="other">Otra ciudad...</option>
				</select>
			    <small class="text-danger">{{ $errors->first('city') }}</small>
			</div>

			<div class="form-group{{ $errors->has('other_city') ? ' has-error' : '' }}">
			    {!! Form::text('other_city', null, ['class' => 'form-control hidden', 'id'=>'other_city', 'placeholder'=>'Escribe el nombre de la ciudad']) !!}
			    <small class="text-danger">{{ $errors->first('other_city') }}</small>
			</div>

			
			<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
			    {!! Form::select('state_id', $states, $spot->state_id, ['id' => 'state_id', 'class' => 'form-control', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('state') }}</small>
			</div>
			
			
			<div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
			    {!! Form::select('country_id', $countries, $spot->country, ['id' => 'country_id', 'class' => 'form-control', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('country') }}</small>
			</div>

			<div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
			    {!! Form::textarea('description', $spot->description, ['class' => 'form-control', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('descripcion') }}</small>
			</div>

			<div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
			    {!! Form::text('tags', $spot->tags, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Tags', 'data-role'=>'tagsinput']) !!}
			    <small class="text-danger">{{ $errors->first('tags') }}</small>
			</div>

			<div class="form-group{{ $errors->has('coords') ? ' has-error' : '' }}">
			    {!! Form::text('coords', $spot->coords, ['class' => 'form-control', 'id'=>'coords', 'placeholder'=>'Agrega las coordenadas', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('coords') }}</small>
			</div>
		</div>
	</div>

	<div class="container-fuid">
		<div class="row">
			<div class="map-drag-container">
				<p class="green italic">Usa el mapa que está debajo, arrastra y suelta el pin en el sobre el spot para obtener las coordenadas.</p>
				<div class="map-drag" id="map-drag"></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				
				<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
				    {!! Form::select('category_id', $spot_categories , $spot->category_id, ['id' => 'category_id', 'class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('category_id') }}</small>
				</div>

				<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
				    {!! Form::select('status', [0=>'Inactivo', 1=>'Activo'], $spot->status, ['id' => 'status', 'class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('status') }}</small>
				</div>
				<a href="{{ url('/admin/spot/'.$spot->id) }}" class="btn btn-primary pull-left">< Regresar al spot</a>
				{!! Form::submit('Actualizar', ['class' => 'btn btn-primary green-btn pull-right']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection