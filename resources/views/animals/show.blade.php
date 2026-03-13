@extends('layouts.app')

@section('content')
    <h1 class="page-title">{{ $animal->name }}</h1>

    <div class="animal-show">
        <img class="animal-show-image" src="{{ asset($animal->photo) }}" alt="Photo de {{ $animal->name }}">
        <div class="animal-show-details">
            <p class="animal-show-line">
               Espèce : {{ $animal->species }}
            </p>
            <p class="animal-show-line">
               Âge : {{ $animal->age }} ans
            </p>
            <p class="animal-show-line">
                Description : {{ $animal->description }}
            </p>
        </div>
    </div>
@endsection

