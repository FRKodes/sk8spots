@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<hr>
			<h1>Dashboard</h1>
			<hr>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title text-center">Nuevos usuarios</h2>
					</div>
						@if(count($users))
							<ul class="list-group">
								@foreach($users as $user)
									<li class="list-group-item"><a href="{{ url('admin/user')}}/{{ $user->id }}" class="" title="go to user">{{ $user->name }}</a></li>
								@endforeach
							</ul>
						@else
							<div class="panel-body">No hay usuarios en este momento que mostrar.</div>
						@endif
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title text-center">Nuevos Spots</h2>
					</div>
					@if($spots)
						<ul class="list-group">
							@foreach($spots as $spot)
								<li class="list-group-item"><a href="{{ url('admin/spot')}}/{{ $spot->id }}" class="" title="Go to spot">{{ $spot->title }}</a></li>
							@endforeach	
						</ul>
					@else
						<div class="panel-body">No hay spots nuevos en este momento.</div>
					@endif
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title text-center">Spots + vistos</h2>
					</div>

					<ul class="list-group">
						<li class="list-group-item"><a href="#" class="" title="go to user">Cras justo odio</a></li>
						<li class="list-group-item"><a href="#" class="" title="go to user">Dapibus ac facilisis in</a></li>
						<li class="list-group-item"><a href="#" class="" title="go to user">Morbi leo risus</a></li>
						<li class="list-group-item"><a href="#" class="" title="go to user">Porta ac consectetur ac</a></li>
						<li class="list-group-item"><a href="#" class="" title="go to user">Vestibulum at eros</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title text-center">Spots + gustados</h2>
					</div>

					<ul class="list-group">
						<li class="list-group-item"><a href="#" class="" title="Go to spot">Cras justo odio</a></li>
						<li class="list-group-item"><a href="#" class="" title="Go to spot">Dapibus ac facilisis in</a></li>
						<li class="list-group-item"><a href="#" class="" title="Go to spot">Morbi leo risus</a></li>
						<li class="list-group-item"><a href="#" class="" title="Go to spot">Porta ac consectetur ac</a></li>
						<li class="list-group-item"><a href="#" class="" title="Go to spot">Vestibulum at eros</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection