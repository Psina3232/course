@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profile</h1>
        <p>Name: {{ $profile->name }}</p>
        <p>Bio: {{ $profile->bio }}</p>
        @if ($profile->profile_picture)
            <img src="{{ asset('storage/' . $profile->profile_picture) }}" alt="Profile Picture">
        @endif
        <a href="{{ route('profile.edit') }}">Edit Profile</a>
    </div>
@endsection
