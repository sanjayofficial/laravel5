@extends('layouts.default')

@section('content')
<div class="container-fluid">
  <div class="block-header">
                <h2>POST</h2>
            </div>
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CREATE POST
                                <small>Create post</small>
                            </h2>
                        </div>
                        <div class="body">


<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data"> 
  {{csrf_field()}}
  <div  class="form-group">
    <label for="title">Title</label>
     <div class="form-line">
    <input id="title" type="text" name="title" class="form-control" placeholder="Enter Title">
  </div>
  </div>
  <div  class="form-group">
     <div class="form-line">
    <label for="body">Body</label>
  </div>
   <textarea id="article-ckeditor" name="body" class="form-control"></textarea>
  </div>
  <div class="form-group">
     <div class="form-line">
    <input type="file" name="cover_image" id="">
  </div>
  </div>
  <div  class="form-group">
    <input type="submit" value="Send" class="btn bg-primary btn-lg waves-effect">
  </div>
</form>
</div>

</div><!-- container -->
@endsection