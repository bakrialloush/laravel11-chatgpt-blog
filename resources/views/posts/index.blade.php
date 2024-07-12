@extends('layouts.app')

@section('title', 'Posts List')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Posts List</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
    </div>
    <ul class="list-group">
        @foreach ($posts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                <span>by {{ $post->author->name }}</span>
                <div>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Are you sure you want to delete this post?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
