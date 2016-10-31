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
</div>

<div class="container spots-list">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			<div class="panel panel-default">
			
				<div class="panel-heading">
					<h3 class="panel-title">¡Últimos Sk8 Spots agregados!</h3>
				</div>
				
				@if($lastOnes)
					<ul class="list-group">
						@foreach($lastOnes as $lastOne)
							<li class="list-group-item"><a href="{{ url('spot').'/'.$lastOne->id }}">{{ $lastOne->title }} <span class="verde2">({{ $lastOne->category->name }})</span></a> - Municipio: {{ $lastOne->city->name }}</li>
						@endforeach
					</ul>
				@endif

			</div>
		</div>
	</div>
</div>
@endsection