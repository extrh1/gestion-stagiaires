@extends('layouts.master')

@section('title', 'Ajouter')

@section('content')
@if(session('success'))
<p style="color:green">{{ session('success')}}</p>
@endif
<div class="container">
    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="row justify-content-center align-items-center">
        <h2 class="text-center text-danger">Ajouter Un Produit</h2>
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre" class="form-control" alue="{{old('titre')}}">
        @error('title')
        <p style="color:red">{{$message}}</p>
        @enderror
        <label for="price">Price :</label>
        <input type="number" name="price" id="price" class="form-control" value="{{old('price')}}">
        @error('price')
        <p style="color:red">{{$message}}</p>
        @enderror        
        <label for="description">Descreption :</label>
        <textarea name="description" id="description" class="form-control" value="{{old('description')}}"></textarea>    
        @error('description')
        <p style="color:red">{{$message}}</p>
        @enderror        
        <button type="submit" class="btn btn-outline-danger my-3">Ajouter</button>
    </div>
    </form>
</div>

@endsection