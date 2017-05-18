@extends('layouts.app')

@section('content')

	@foreach($posts as $post)
		<div class="row">
			<div class="col-md-12">
				<h3><a href="{{ route("post_path",['post'=>$post->id]) }}">{{ $post->id}} - {{$post->title }}</a></h3>
				<p>{{ $post->description }}</p>
				<p>{{ $post->created_at->diffForHumans() }}</p>
			</div>
		</div>
		<hr>
	@endforeach

	{{$posts->render()}}

@endsection
