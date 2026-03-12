@extends('layouts.app')

@section('content')
    <h2 class="page-title">{{ $animal->name }}</h2>

    <div class="animal-show">
        <img class="animal-show-image" src="{{ asset($animal->photo) }}" alt="Photo de {{ $animal->name }}">
        <div>
            <p>Espèce : {{ $animal->species }}</p>
            <p>Age : {{ $animal->age }} ans</p>
            <p>{{ $animal->description }}</p>
        </div>
    </div>
@endsection

