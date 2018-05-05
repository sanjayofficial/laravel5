@extends('layouts.app')

@section('content')
<div class="container">
	<a href="/posts" class="btn btn-default">Go back</a>
	<div class="article">
<h3> {{$post->title}}</h3>
<img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%">
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<h4>{!!$post->body!!}</h4>
	<hr>
	@if(!Auth::guest())
	  @if(Auth::user()->id == $post->user_id)
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>


	<form method="post" action="{{route('posts.destroy', $post->id)}}">
		<input type="hidden" name="_method" value="delete">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="submit" name="submit" class="btn btn-danger" value="Delete">
	</form>
	@endif
@endif
</div>


</div><!-- container -->
@endsection