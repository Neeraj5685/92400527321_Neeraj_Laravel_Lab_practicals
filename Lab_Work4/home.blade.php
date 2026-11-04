
@extends('layouts.app')

@section('title', 'Home - TravelWorld')

@section('content')

<div class="hero">
    <h1>Explore the World</h1>
    <p>Discover beautiful places and enjoy your journey.</p>
    <a href="/about" class="btn btn-warning">Learn More</a>
</div>

<div class="content">
    <h2>Welcome to TravelWorld</h2>
    <p>We help you discover amazing destinations.</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <h4> Goa</h4>
            <p>Enjoy beautiful beaches.</p>
        </div>

        <div class="col-md-4">
            <h4> Jaipur</h4>
            <p>Explore royal palaces.</p>
        </div>

        <div class="col-md-4">
            <h4> Manali</h4>
            <p>Experience mountain views.</p>
        </div>
    </div>
</div>

@endsection
