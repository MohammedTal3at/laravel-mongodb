@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-3">
		<h2>
			Create New Post
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-push-1">
		<form class="form" method="POST" action="{{ action('PostController@store') }}">
			 @csrf
			<div class="form-group">
				<input type="text" class="form-control" name="title" placeholder="Title">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="3" name="body" placeholder="Body">
					
				</textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit"> Create </button>
			</div>
		</form>
	</div>
</div>

@endsection