@extends('app')

@section('content')
<div class="container">
	<h1>Spots registrados</h1>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Spots</h2>
				</div>
				@if($spots)
					<ul class="list-group">
						@foreach($spots as $spot)
							<li class="list-group-item"><a href="{{ url('admin/spot')}}/{{ $spot->id }}" class="" title="go to user">{{ $spot->title }}</a></li>
						@endforeach
					</ul>
				@endif
			</div>
			{{ $spots->links() }}
		</div>	
	</div>
</div>
@endsection