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
			@include('posts.form')
		</form>
	</div>
</div>

@endsection