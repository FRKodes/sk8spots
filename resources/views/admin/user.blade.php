@extends('app')

@section('content')
	<div class="container">
		<h1>Usuario: {{ $user->name }}</h1>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
				{{ $user->name }}
			</div>
		</div>
	</div>
@endsection