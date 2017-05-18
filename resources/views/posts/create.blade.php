@extends('layouts.app')

@section('content')


	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li> {{$error}} </li>
				@endforeach
			</ul>
		</div>
	@endif


	<form action="{{ route('store_post_path') }}" method="POST">

		{{ csrf_field() }}

		<div class="form-group">

			<label for="title">Título</label>
			<input type="text" name="title" class="form-control" value="{{ old('title') }}"/>

		</div>

		<div class="form-group">

			<label for="description">Descripción</label>
			<input type="text" name="description" class="form-control" value="{{ old('description') }}"/>

		</div>

		<div class="form-group">

			<label for="url">URL</label>
			<input type="text" name="url" class="form-control" value="{{ old('url') }}"/>

		</div>

		<div class="form-group">

			<button type="submit" class="btn btn-primary">Create</button>

		</div>


	</form>

@endsection
