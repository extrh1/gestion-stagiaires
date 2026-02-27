@extends('layouts.master')
@section('title', 'Ajouter Stagiaire')

@section('content')
    <div class="container">
        <h2>Ajouter Stagiaire</h2>
        
        <form action="{{ route('stagiaire.store') }}" method="POST">
            @csrf

            <label class="form-label">Nom :</label>
            <input type="text" name="nom" class="form-control mb-3">

            <label class="form-label">Note :</label>
            <input type="number" name="note" class="form-control mb-3">

            <button type="submit" class="btn btn-outline-danger">Enregistrer</button>
        </form>
    </div>
@endsection