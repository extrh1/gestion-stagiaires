@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    <h2>Statistiques des Annonces</h2>
    <ul class="list-group mt-3">
        <li class="list-group-item">Nombre total : {{ $stats['total'] }}</li>
        <li class="list-group-item">Prix total : {{ $stats['prix_total'] }}</li>
        <li class="list-group-item">Prix moyen : {{ $stats['prix_moyen'] }}</li>
        <li class="list-group-item">Surface totale : {{ $stats['surface_totale'] }}</li>
    </ul>
</div>
@endsection