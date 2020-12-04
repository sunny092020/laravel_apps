<div class="container">
    @foreach ($products as $product)
        {{ $product->name }} <br/>
    @endforeach
</div>

{{ $products->links() }}
