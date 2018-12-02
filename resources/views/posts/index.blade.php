@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-md-3">
	<h2>
		All Posts
	</h2>
</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-hover">
			<tr>
				<th>Title</th>
				<th>Body</th>
				<th>User</th>
				<th>Actions</th>
			</tr>
			@foreach($posts as $post)
				
				<tr>
					<td>{{ $post->title }}</td>
					<td>{{ $post->body }}</td>
					<td>{{ $post->user['name'] }}</td>
					<td>
						<a href="{{ action('PostController@delete',['id'=>$post->_id]) }}" class="btn btn-danger">Delete</a>
						<a href="{{ action('PostController@edit',['id'=>$post->_id]) }}" class="btn btn-primary">Edit</a>
					</td>
				</tr>


			@endforeach
		</table>
	</div>
</div>




@endsection