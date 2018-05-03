@extends('layouts.app')

@section('content')
<div class="container">
<h1>Edit post</h1>

<form method="POST" action="/posts/{{$post->id}}"> 
  {{csrf_field()}}
  {{method_field('PATCH')}}
  <div>
    <label for="title">Title</label>
    <input id="title" type="text" name="title" class="form-control" value="{{$post->title}}">
  </div>
  <div>
    <label for="body">Body</label>
   <textarea id="article-ckeditor" name="body" class="form-control" value="{{$post->body}}"></textarea>
  </div>
  <div>
    <input type="submit" value="Send" class="btn btn-default">
  </div>
</form>

</div><!-- container -->
@endsection