@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <h1 class="text-center my-5">My Movies</h1>
    <div class="row row-cols-5 row-gap-4">
        @forelse ($movies as $movie)
        <div class="col">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                    <div class="nationality">{{ $movie->nationality }}</div>
                    <div class="date">{{ $movie->date }}</div>
                    <div class="vote">{{ $movie->vote }}</div>
                </div>
            </div>
        </div>
        @empty
            
        @endforelse
    </div>
@endsection