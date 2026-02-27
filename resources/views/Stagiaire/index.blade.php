@extends('layouts.master')
@section('title', 'Stagiaire')

@section('content')


    <div class="container">

        <h2 class="text-primary">Liste Des Stagaire</h2>
        
        <a href="{{route('stagiaire.create')}}" class="btn btn-outline-primary mb-3">Ajouter</a>
        
        <table border="1" class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
            @foreach($stagiaires as $stagiaire)
            <tr>
                <td>{{$stagiaire->id}}</td>
                <td>{{$stagiaire->nom}}</td>
                <td>{{$stagiaire->note}}</td>
                <td>
                    <a href="{{route('stagiaire.show',$stagiaire->id)}}">Voir</a>
                    <a href="{{route('stagiaire.edit',$stagiaire->id)}}">Modifier</a>
                    <form action="{{route('stagiaire.destroy',$stagiaire->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection