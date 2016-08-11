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
			<a href="{{ url('spot/create') }}" class="btn btn-primary" title="¡El conocimiento es poder!">¡Compártelo con la comunidad!</a>
		</div>
	</div>
</div>

<div class="container spots-list">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			
				<div class="panel-heading">
					<h3 class="panel-title">Sk8 Spots cerca de tí</h3>
				</div>
				
				<div class="panel-body">
					Basic panel example
				</div>

				<ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				</ul>

			</div>
		</div>
	</div>
</div>
@endsection