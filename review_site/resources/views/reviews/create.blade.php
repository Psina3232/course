@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Review</h1>
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" required></textarea>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
    </div>
@endsection
