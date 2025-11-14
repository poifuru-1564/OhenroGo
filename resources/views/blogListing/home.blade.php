@extends('layout.blogListing')
@section('welcome-content')

<link rel="stylesheet" href="{{ asset('css/blogListing.css') }}">

@if (session('message'))
    <div class="errorMessage">{{ session('message') }}</div>
@endif

<div class="home-container">
    <div class="home-overlay">
        <div class='home-message'>
            <p>Welcome to Ohenro GO!</p>
            <p class="sub">- Capture Your Journey. Revisit Every Moment -</p>
        </div>
    </div>
</div>


@endsection