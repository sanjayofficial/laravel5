@extends('layouts.app')

@section('content')
<div class="container">


<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data"> 
  {{csrf_field()}}
  <div  class="form-group">
    <label for="title">Title</label>
    <input id="title" type="text" name="title" class="form-control">
  </div>
  <div  class="form-group">
    <label for="body">Body</label>
   <textarea id="article-ckeditor" name="body" class="form-control"></textarea>
  </div>
  <div class="form-group">

    <input type="file" name="" id>
  </div>
  <div  class="form-group">
    <input type="submit" value="Send" class="btn btn-default">
  </div>
</form>

</div><!-- container -->
@endsection