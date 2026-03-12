@extends('layouts.app')

@section('content')
    <h2 class="page-title">Nos animaux</h2>

    <div class="animal-list">
        @foreach ($animals as $animal)
            <x-animal-card :animal="$animal" />
        @endforeach
    </div>
@endsection

