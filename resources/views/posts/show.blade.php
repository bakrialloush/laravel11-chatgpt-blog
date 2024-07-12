@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <p>Author: {{ $post->author->name }}</p>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Are you sure you want to delete this post?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
