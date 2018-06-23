@extends('layouts.default')

@section('content')
<div class="container-fluid">
  <div class="block-header">
                <h2> EDIT POST</h2>
            </div>
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT POST
                                <small>Edit post</small>
                            </h2>
                        </div>
                        <div class="body">
                          <form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data"> 
  {{csrf_field()}}
  {{method_field('PATCH')}}
  <div class="form-group">
    <label for="title">Title</label>
    <div class="form-line">
    <input id="title" type="text" name="title" class="form-control" value="{{$post->title}}">
    </div>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
   <textarea id="article-ckeditor" name="body" class="form-control" value="{{$post->body}}"></textarea>
  </div>
  <div class="form-group">
    <input type="file" name="cover_image" id="">
  </div>
  <div class="form-group">
    <input type="submit" value="Send" class="btn bg-primary btn-lg waves-effect">
  </div>
</form>
                        </div>
                    </div>
                </div>
            </div>

</div><!-- container -->
@endsection