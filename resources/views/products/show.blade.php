@extends('layouts.master')

@section('title', $product['title'])

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">

            <div class="bg-white p-4 rounded shadow-sm">

                <div class="text-center mb-4">
                    <img src="{{ asset('img/' . $product['image']) }}"
                         alt="{{ $product['title'] }}"
                         class="img-fluid"
                         style="max-height: 320px; object-fit: contain;">
                </div>

                <h2 class="mb-2">{{ $product['title'] }}</h2>

                <p class="text-success fw-bold mb-3">{{ $product['price'] }}</p>

                <p class="mb-4">{{ $product['description'] }}</p>

                <a class="btn btn-outline-primary" href="{{ route('products.index') }}">
                    ← Retour
                </a>

            </div>

        </div>
    </div>
</div>
@endsection