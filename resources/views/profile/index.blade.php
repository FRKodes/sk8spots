@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<p>id: {{ $user->id }}</p>
			<p>name: {{ $user->name }}</p>
			<p>pic: {{ $user->profile_pic }}</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor veritatis tenetur animi praesentium rerum unde natus, nobis id, repellat hic mollitia repellendus quidem impedit necessitatibus quia dicta et numquam recusandae.</p>
		</div>
	</div>
@endsection