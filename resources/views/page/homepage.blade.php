@extends('layout.page')

@section('body-class', 'home-page bg-[#eaddca]')
@section('content')
<!-- Buttons on the left -->
    <div class="category-buttons">
        <a href="{{ route('car') }}" class="category-btn">Sports Car</a>
        <a href="{{ route('moviesgenre') }}" class="category-btn">Movies Genre</a>
        <a href="{{ route('destination') }}" class="category-btn">Destination</a>
        <a href="{{ route('arts') }}" class="category-btn">Arts</a>
        <a href="{{ route('anime') }}" class="category-btn">Anime</a>
    </div>

    <div class="interests-container">

        <h1 class="interests-title">My Photo Album of Interests</h1>
        <p class="interests-caption"> A collection inspired by speed, creativity, imagination, and cinematic stories. </p>

    <div class="category-image-wrapper">
    <div class="interest-main-image">
        <img src="{{ asset('images/image-homepage.jpg') }}" alt="Interests Banner">
    </div>

</div>


@endsection
