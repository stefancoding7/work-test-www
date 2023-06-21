<div>
    <h3>Basket ({{$products->count()}})</h3>
    @if($products && $products->count() > 0)
        <ol class="list-group list-group-numbered">
            @foreach($products as $product)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                    <div class="fw-bold">{{$product->name}}</div>
                    {{$product->options['description']}} | £{{number_format($product->price, 2)}}
                    </div>
                    <span wire:click="removeProduct({{$product->rowId}})" class="badge bg-primary rounded-pill" style="cursor: pointer;">X</span>
                </li>
            @endforeach
            
        </ol>
        <hr>
        <p>Total: <b>£{{$total}}</b></p>
    @endif
</div>
