<div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
            @foreach ($mightAlsoLike as $product)
                <a href="{{URL::to('/single/'.$product['id'])}}" class="might-like-product">
                    <img src="{{$product['cover']}}" alt=""  height="150" width="170">
                    <div class="might-like-product-name">{{ $product->name }}</div>
                    <div class="might-like-product-name">{{ $product->price }}$</div>
                </a>
            @endforeach
        </div>
    </div>
</div>