@extends('app')

@section('content')
	<div class="container">
		<hr>
		<h1>Usuarios registrados</h1>
		<hr>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Usuarios</h2>
					</div>
						@if(count($users))
							<ul class="list-group">
								@foreach($users as $user)
									<li class="list-group-item"><a href="{{ url('admin/user/'.$user->id)}}" class="" title="go to user">{{ $user->name }}</a></li>
								@endforeach
							</ul>
						@else
							<div class="panel-body">No hay usuarios en este momento que mostrar.</div>
						@endif
				</div>

				{{ $users->links() }}

			</div>
		</div>
	</div>
@endsection