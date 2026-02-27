@extends('layouts.master')
@section('title', 'Modifier Annonce')

@section('content')
<div class="container">
    <h2>Modifier Annonce</h2>

    <form action="{{ route('annonces.update', $annonce->id) }}" 
          method="POST" 
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" 
                   name="titre" 
                   class="form-control"
                   value="{{ $annonce->titre }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" 
                      class="form-control">{{ $annonce->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Type</label>
            <select name="type" class="form-control">
                <option value="Appartement" 
                    {{ $annonce->type == 'Appartement' ? 'selected' : '' }}>
                    Appartement
                </option>

                <option value="Maison"
                    {{ $annonce->type == 'Maison' ? 'selected' : '' }}>
                    Maison
                </option>

                <option value="Villa"
                    {{ $annonce->type == 'Villa' ? 'selected' : '' }}>
                    Villa
                </option>

                <option value="Terrain"
                    {{ $annonce->type == 'Terrain' ? 'selected' : '' }}>
                    Terrain
                </option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Ville</label>
            <input type="text" 
                   name="ville" 
                   class="form-control"
                   value="{{ $annonce->ville }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Superficie</label>
            <input type="number" 
                   name="superficie" 
                   class="form-control"
                   value="{{ $annonce->superficie }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Etat</label><br>
            <input type="radio" name="etat" value="Neuf" 
                {{ $annonce->etat == 'Neuf' ? 'checked' : '' }}> Neuf
            <input type="radio" name="etat" value="Ancien" 
                {{ $annonce->etat == 'Ancien' ? 'checked' : '' }}> Ancien
        </div>

        <div class="mb-3">
            <label class="form-label">Prix</label>
            <input type="number" 
                   name="prix" 
                   class="form-control"
                   value="{{ $annonce->prix }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Nouvelle Photo</label>
            <input type="file" name="photo" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Modifier
        </button>

    </form>
</div>
@endsection