@extends('layouts.app')

@section('content')
    <h1 class="page-title">{{ $animal->name }}</h1>

    <div class="animal-show">
        <img class="animal-show-image" src="{{ asset($animal->photo) }}" alt="Photo de {{ $animal->name }}">
        <div class="animal-show-details">
            <p class="animal-show-line">
                <span class="animal-show-label">Espèce :</span><br>
                <span class="animal-show-value">{{ $animal->species }}</span>
            </p>
            <p class="animal-show-line">
                <span class="animal-show-label">Âge :</span><br>
                <span class="animal-show-value">{{ $animal->age }} ans</span>
            </p>
            <p class="animal-show-line">
                <span class="animal-show-label">Description :</span><br>
                <span class="animal-show-value">{{ $animal->description }}</span>
            </p>
        </div>
    </div>
@endsection

