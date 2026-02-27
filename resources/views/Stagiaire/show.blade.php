@extends('layouts.master')
@section('title', 'Détails Stagiaire')

@section('content')

    <div class="container">
        <h2 class="text-primary mb-4">Détails du Stagiaire</h2>

        <div class="card p-3 shadow">
            <p><strong>ID :</strong> {{ $stagiaire->id }}</p>
            <p><strong>Nom :</strong> {{ $stagiaire->nom }}</p>
            <p><strong>Note :</strong> {{ $stagiaire->note }}</p>
        </div>

        <a href="{{ route('stagiaire.index') }}" 
        class="btn btn-secondary mt-3">
        Retour
        </a>
    </div>
@endsection