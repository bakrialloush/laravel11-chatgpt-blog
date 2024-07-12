@extends('layouts.app')

@section('title', 'Authors List')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Authors List</h1>
        <a href="{{ route('authors.create') }}" class="btn btn-primary">Create New Author</a>
    </div>
    <ul class="list-group">
        @foreach ($authors as $author)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a>
                <div>
                    <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Are you sure you want to delete this author?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
