@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h3>{{$post->title}}</h3>
			<p>{{$post->description}}</p>
			<p>{{$post->created_at->diffForHumans()}}</p>
		</div>
	</div>

@endsection