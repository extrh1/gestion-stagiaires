@extends('layouts.master')

@section('title', 'Créer un compte')

@section('content')
    <h1>Cree Un Compte</h1>
    <form action="{{ route('compte.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom d'utilisateur:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            @error('name')
            <p style="color:red">{{ $message }}</p>
            @enderror
            <label for="password" class="form-label">Mot de passe:</label>
            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
            @error('password')
            <p style="color:red">{{ $message }}</p>
            @enderror
            <label for="password_confirmation" class="form-label">Confirmer le mot de passe:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
            @error('password_confirmation')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary form-control">S'inscrire</button>
    </form>
@endsection