@extends('layouts.default')

@section('content')
<div class="container-fluid">
	<div class="block-header">
                <h2>POSTS</h2>
     </div>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               POSTS LIST
                            </h2>
                        </div>
                        <div class="body">
                        	
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

                        </div>
                    </div>
                </div>
            </div>






</div><!-- container -->
@endsection