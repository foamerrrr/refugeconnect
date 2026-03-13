@extends('layouts.app')

@section('content')
    <h1 class="page-title">Nos animaux</h1>

    <div class="animal-list">
        @foreach ($animals as $animal)
            <x-animal-card :animal="$animal" />
        @endforeach
    </div>
@endsection

