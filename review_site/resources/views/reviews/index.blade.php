@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Reviews</h1>
        <a href="{{ route('reviews.create') }}" class="btn btn-primary">Create Review</a>
        @foreach ($reviews as $review)
            <div class="review">
                <h2>{{ $review->title }}</h2>
                <p>{{ $review->body }}</p>
                <p>Rating: {{ $review->rating }}</p>
                <p>By: {{ $review->user->name }}</p>
            </div>
        @endforeach
    </div>
@endsection
