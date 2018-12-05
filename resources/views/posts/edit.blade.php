@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-3">
		<h2>
			Edit Post
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-push-1">
		<form class="form" method="POST" action="{{ action('PostController@update',['id'=>$post->id]) }}">
			 @csrf
			@include('posts.form',compact('post'))
		</form>
	</div>
</div>

@endsection