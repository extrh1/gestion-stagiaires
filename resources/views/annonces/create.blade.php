@extends('layouts.master')
@section('title', 'Ajouter Annonce')

@section('content')
<div class="container">
    <h2>Nouvelle annonce</h2>

    <form action="{{ route('annonces.store') }}" 
          method="POST" 
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Type</label>
            <select name="type" class="form-control">
                <option value="Appartement">Appartement</option>
                <option value="Maison">Maison</option>
                <option value="Villa">Villa</option>
                <option value="Terrain">Terrain</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Ville</label>
            <input type="text" name="ville" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Superficie</label>
            <input type="number" name="superficie" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Etat</label><br>
            <input type="radio" name="etat" value="Neuf"> Neuf
            <input type="radio" name="etat" value="Ancien"> Ancien
        </div>

        <div class="mb-3">
            <label class="form-label">Prix</label>
            <input type="number" name="prix" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            Ajouter
        </button>

    </form>
</div>
@endsection