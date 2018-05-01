@extends('layouts.app')

@section('content')
<div class="container">
<h1>Posts</h1>

@if( count($posts)>0)

@foreach($posts as $post)

<div class="article">
	<h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
	<small>Written on {{$post->created_at}}</small>
	<h4>{!!$post->body!!}</h4>
</div>

@endforeach
{{$posts->links()}}
@else
<p>No post</p>
@endif

</div><!-- container -->
@endsection