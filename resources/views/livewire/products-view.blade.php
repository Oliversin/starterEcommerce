<div>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ $product->images->first()->url }}" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">${{ $product->price }}</p>
                        <p class="card-text">Stock: {{ $product->stock }}</p>
                        <button wire:click="addToCart('{{ $product->id }}', '{{ $product->name }}', {{ $product->price }})" class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @livewire('shopping-cart')
</div>
