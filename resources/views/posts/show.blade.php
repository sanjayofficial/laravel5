@extends('layouts.app')

@section('content')
<div class="container">
	<a href="/posts" class="btn btn-default">Go back</a>
	<div class="article">
<h3> {{$post->title}}</h3>
<small>Written on {{$post->created_at}}</small>
	<h4>{{$post->body}}</h4>

</div>


</div><!-- container -->
@endsection