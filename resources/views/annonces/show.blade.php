@extends('layouts.master')
@section('title', 'Détails de l\'annonce')

@section('content')
<div class="container mt-4">
    <h1 class="mb-3">{{ $annonce->titre }}</h1>
    
    @if($annonce->photo)
        <img src="{{ asset('storage/' . $annonce->photo) }}" alt="{{ $annonce->titre }}" class="img-fluid mb-3" style="max-height: 400px;">
    @endif

    <p><strong>Description :</strong> {{ $annonce->description }}</p>
    <p><strong>Type :</strong> {{ $annonce->type }}</p>
    <p><strong>Ville :</strong> {{ $annonce->ville }}</p>
    <p><strong>Superficie :</strong> {{ $annonce->superficie }} m²</p>
    <p><strong>État :</strong> {{ $annonce->etat }}</p>
    <p><strong>Prix :</strong> {{ number_format($annonce->prix, 2, ',', ' ') }} MAD</p>

    <a href="{{ route('annonces.index') }}" class="btn btn-primary mt-3">Retour à la liste</a>
</div>
@endsection