@extends('layouts.app')

@section('content')
<div class="container">
<h1>Posts</h1>

@if( count($posts)>0)

@foreach($posts as $post)
<div class="article">
<div class="card">
	<div class="row">
		<div class="col-md-4">
			<img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%">
		</div>
		<div class="col-md-8">
			<h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<h4>{!!$post->body!!}</h4>
		</div>
	</div>
	
</div>
<br>
</div>
@endforeach
{{$posts->links()}}
@else
<p>No post</p>
@endif

</div><!-- container -->
@endsection