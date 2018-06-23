@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                   <p>You are logged in!</p>

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your blog posts</h3>
                @if(count($posts)>0)
                    <table class="table table-stipped">
                        <tr>
                            <th>Title</th>
                             <th></th>
                              <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                             <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                              <td> <form method="post" action="{{route('posts.destroy', $post->id)}}">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" name="submit" class="btn btn-danger" value="Delete">
    </form></td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <p>You have no posts.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
