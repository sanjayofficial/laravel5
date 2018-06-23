@extends('layouts.default')
@section('content')


<div class="container-fluid">
            <div class="block-header">
                 <a href="/posts" class="btn btn-default">Go back</a>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SINGLE POST
                                <small>Show detailed post</small>
                            </h2>
                        </div>
                        <div class="body">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection