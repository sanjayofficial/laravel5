@extends('layouts.default')

@section('content')
<div class="container">
<h1>Edit post</h1>

<form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data"> 
  {{csrf_field()}}
  {{method_field('PATCH')}}
  <div class="form-group">
    <label for="title">Title</label>
    <input id="title" type="text" name="title" class="form-control" value="{{$post->title}}">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
   <textarea id="article-ckeditor" name="body" class="form-control" value="{{$post->body}}"></textarea>
  </div>
  <div class="form-group">
    <input type="file" name="cover_image" id="">
  </div>
  <div class="form-group">
    <input type="submit" value="Send" class="btn btn-default">
  </div>
</form>

</div><!-- container -->
@endsection