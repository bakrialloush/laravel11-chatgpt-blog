@extends('layouts.app')

@section('title', 'Edit Author')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Edit Author</h1>
            <form action="{{ route('authors.update', $author->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $author->name) }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="field" class="form-label">Field</label>
                    <input type="text" class="form-control" id="field" name="field" value="{{ old('field', $author->field) }}">
                    @error('field')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <a href="{{ route('authors.index') }}" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
@endsection
