@extends('layouts.app')

@section('title', 'Author Details')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $author->name }}</h5>
            <p class="card-text">Field: {{ $author->field }}</p>
            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Are you sure you want to delete this author?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
