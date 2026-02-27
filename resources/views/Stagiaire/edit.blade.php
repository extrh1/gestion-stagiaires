@extends('layouts.master')
@section('title', 'Modifier Stagiaire')

@section('content')
    <div class="container">
        <h2 class="text-primary mb-4">Modifier Stagiaire</h2>

        <form action="{{ route('stagiaire.update', $stagiaire->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" 
                    name="nom" 
                    class="form-control" 
                    value="{{ $stagiaire->nom }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Note :</label>
                <input type="number" 
                    name="note" 
                    class="form-control" 
                    value="{{ $stagiaire->note }}">
            </div>

            <button type="submit" class="btn btn-warning">
                Modifier
            </button>
        </form>
    </div>
@endsection