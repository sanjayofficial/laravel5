@extends('layouts.app')

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

                    You are logged in!

                    <a href="/posts/create" class="btn btn-primart">Create Post</a>
                    <h3>Your blog posts</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
