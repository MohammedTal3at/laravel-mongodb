<div class="form-group">
	<input type="text" value="{{ isset($post)? $post->title : null }}" class="form-control" name="title" placeholder="Title">
</div>
<div class="form-group">
	<textarea class="form-control" rows="3" name="body" placeholder="Body">
		{{ isset($post)? $post->body : null }}
	</textarea>
</div>
<div class="form-group">
	<button class="btn btn-primary" type="submit"> Submit </button>
</div>