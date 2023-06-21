<div>
    @if($products && $products->count() > 0)
        @foreach($products as $product)
            <p>{{$product->name}}</p>
        @endif
        
    @endif
</div>
