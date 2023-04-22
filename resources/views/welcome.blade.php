@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to my website</h1>
        <p>This is a sample home page</p>

        <div class="row">
            <div class="col-sm-6">
                <a href="{{ route('posts.index') }}" class="btn btn-primary btn-lg btn-block">View Posts</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('posts.create') }}" class="btn btn-success btn-lg btn-block">Create Post</a>
            </div>
        </div>
    </div>
@endsection
