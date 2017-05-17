@extends('layouts.app')

@section('content')

	@foreach($posts as $post)
		<div class="row">
			<div class="col-md-12">
				<h3>{{ $post->id}} - {{$post->title }}</h3>
				<p>{{ $post->description }}</p>
				<p>{{ $post->created_at->diffForHumans() }}</p>
			</div>
		</div>
		<hr>
	@endforeach

@endsection