@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Review</h1>
        <form action="{{ route('reviews.update', $review->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $review->title }}" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" required>{{ $review->body }}</textarea>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" value="{{ $review->rating }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Review</button>
        </form>
        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="margin-top: 10px;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Review</button>
        </form>
    </div>
@endsection
