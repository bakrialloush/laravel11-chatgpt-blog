@extends('layouts.app')

@section('title', 'Create Author')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Create Author</h1>
            <form action="{{ route('authors.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="field" class="form-label">Field</label>
                    <input type="text" class="form-control" id="field" name="field" value="{{ old('field') }}">
                    @error('field')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
            <a href="{{ route('authors.index') }}" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
@endsection
