@extends('layouts.master')

@section('title', 'products')

@section('content')
<div class="container">
    <h1 class="mb-4">Nos Produits</h1>

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/' . $product['image']) }}"
                         class="card-img-top p-3"
                         style="height:180px; object-fit:contain">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product['title'] }}</h5>
                        <p class="text-success fw-semibold">{{ $product['price'] }}</p>

                        <a href="{{ route('products.show', $product['id']) }}"
                           class="btn btn-primary mt-auto">
                            Voir
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection