@extends('layouts.app')

@section('content')
<div class="container">


<form method="POST" action="{{ route('posts.store') }}"> 
  <div>
    <label for="title">Title</label>
    <input id="title" type="text" name="title">
  </div>
  <div>
    <label for="body">Body</label>
   <textarea id="body" name="body"></textarea>
  </div>
  <div>
    <input type="submit" value="Send" class="btn btn-default">
  </div>
</form>

</div><!-- container -->
@endsection