<div class="animal-card">
    <a href="{{ route('animal.show', $animal->id) }}">
        <img src="{{ asset($animal->photo) }}" alt="Photo de {{ $animal->name }}">
    </a>
    <h2 class="animal-card-name">{{ $animal->name }}</h2>
    <p>Espèce : {{ $animal->species }}</p>
    <p>Âge : {{ $animal->age }} ans</p>
    <p>{{ $animal->description }}</p>
    <div class="animal-card-actions">
        <a class="btn" href="{{ route('animal.editer', $animal->id) }}">Modifier</a>
        <a class="btn" href="{{ route('animal.supprimer', $animal->id) }}">Supprimer</a>
    </div>
</div>

