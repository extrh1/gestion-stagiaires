<div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/' . $product['image']) }}"
             class="card-img-top p-3"
             style="height: 180px; object-fit: contain">

        <div class="card-body d-flex flex-column">
            <h5>{{ $product['title'] }}</h5>
            <p class="text-success">{{ $product['price'] }}</p>
            <a href="{{ route('product.show', $product['id']) }}"
               class="btn btn-primary mt-auto">
                Voir
            </a>
        </div>
    </div>
</div>