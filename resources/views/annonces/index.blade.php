@extends('layouts.master')

@section('title', 'List des annonces')

@section('content')
<div class="container">
    <h2>List des annonces</h2>
    <a class="btn btn-primary" href="{{route('annonces.create')}}">Nouvelle annonce</a>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Type</th>
                <th>Ville</th>
                <th>Superficie (m²)</th>
                <th>Etat</th>
                <th>Prix (dhs)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($annonces as $annonce)
            <tr>
                <td>{{$annonce->titre}}</td>
                <td>{{$annonce->description}}</td>
                <td>{{$annonce->type}}</td>
                <td>{{$annonce->ville}}</td>
                <td>{{$annonce->superficie}}</td>
                <td>{{$annonce->etat}}</td>
                <td>{{$annonce->prix}}</td>
                <td>
                    <a href="{{route('annonces.show', $annonce->id)}}"><i class="bi bi-eye"></i></a>
                    <a href="{{route('annonces.edit', $annonce->id)}}"><i class="bi bi-pencil"></i></a>
                    <form action="{{route('annonces.destroy', $annonce->id)}}" method="post" onsubmit="return confirm('Voulez-vous vraiment supprimer cette annonce ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection