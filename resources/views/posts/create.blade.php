@extends('layouts.app')

@section('content')
<div class="container">


<form method="POST" action="{{ route('posts.store') }}"> 
  {{csrf_field()}}
  <div>
    <label for="title">Title</label>
    <input id="title" type="text" name="title" class="form-control">
  </div>
  <div>
    <label for="body">Body</label>
   <textarea id="article-ckeditor" name="body" class="form-control"></textarea>
  </div>
  <div>
    <input type="submit" value="Send" class="btn btn-default">
  </div>
</form>

</div><!-- container -->
@endsection