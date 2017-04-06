@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
			<hr>
			<h1 class="title">¿Conoces un Spot?</h1>
			<p><h4 class="text-center">¡Compártelo con la comunidad!</h4></p>
			<hr>
			<p>
				Imagina que eres nuevo en una ciudad y no conoces lugares donde patinar, sería genial tener un directorio de spots para patinar los días que estés en la ciudad ¿no?. <br>
				Agrega un spot y ayuda a que alguien más no tenga ese problema, apoya a la comunidad skate mundial.
			</p>
		</div>
	</div>
</div>

<div class="container"><div class="row"><hr></div></div>

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

			{!! Form::open(['url'=>'spot', 'id'=>'submitForm']) !!}
			<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
			    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Escribe el título del spot', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('title') }}</small>
			</div>
			<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
			    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder'=>'Agrega la dirección. Ej. Av. Vallarta 1234', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('address') }}</small>
			</div>
			<div class="form-group{{ $errors->has('neighborhood') ? ' has-error' : '' }}">
			    {!! Form::text('neighborhood', null, ['class' => 'form-control', 'placeholder'=>'Colonia Ej. Arcos Vallarta',  'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('neighborhood') }}</small>
			</div>
			
			<div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
				<select name="city_id" id="city_id" class="form-control" required="required">
					<option value="">Selecciona una ciudad...</option>
					@foreach($cities as $city)
						<option value="{{ $city->id }}" data-state="{{ $city->state->name }}" data-state-id="{{ $city->state->id }}" >{{ $city->name }} ({{ $city->state->short_name }})</option>
					@endforeach
					<option value="otra" data-state-id="other">Otra ciudad...</option>
				</select>
			    <small class="text-danger">{{ $errors->first('city') }}</small>
			</div>

			<div class="form-group{{ $errors->has('other_city') ? ' has-error' : '' }}">
			    {!! Form::text('other_city', null, ['class' => 'form-control hidden', 'id'=>'other_city', 'placeholder'=>'Escribe el nombre de la ciudad']) !!}
			    <small class="text-danger">{{ $errors->first('other_city') }}</small>
			</div>
			
			<div class="form-group{{ $errors->has('state_id') ? ' has-error' : '' }}">
			    {!! Form::select('state_id', $states, null, ['id' => 'state_id', 'class' => 'form-control hidden', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('state_id') }}</small>
			</div>
			
			<div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
			    {!! Form::text('country_id', null, ['class' => 'form-control', 'placeholder'=>'País', 'value'=>'México', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('country_id') }}</small>
			</div>
			<div class="form-group{{ $errors->has('coords') ? ' has-error' : '' }}">
			    {!! Form::text('coords', null, ['class' => 'form-control', 'id'=>'coords', 'placeholder'=>'Agrega las coordenadas', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('coords') }}</small>
			</div>
			
			<div class="map-drag-container">
				<p class="green italic">Usa el mapa que está debajo, arrastra y suelta el pin en el sobre el spot para obtener las coordenadas.</p>
				<div class="map-drag" id="map-drag"></div>
			</div>

			<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
			    {!! Form::select('category_id', $spot_categories, null, ['id' => 'category_id', 'class' => 'form-control', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('category_id') }}</small>
			</div>
			{!! Form::submit('Enviar', ['class' => 'btn btn-primary green-btn pull-right']) !!}
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection