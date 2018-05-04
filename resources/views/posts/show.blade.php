@extends('layouts.app')

@section('content')
<div class="container">
	<a href="/posts" class="btn btn-default">Go back</a>
	<div class="article">
<h3> {{$post->title}}</h3>
<small>Written on {{$post->created_at}}</small>
	<h4>{!!$post->body!!}</h4>
	<hr>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>


	<form method="post" action="{{route('posts.destroy', $post->id)}}">
		<input type="hidden" name="_method" value="delete">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="submit" name="submit" class="btn btn-danger" value="Delete">
	</form>

</div>


</div><!-- container -->
@endsection