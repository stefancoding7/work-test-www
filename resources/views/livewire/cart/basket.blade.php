<div>
    @if($productsAll && $productsAll->count() > 0)
        <ol class="list-group list-group-numbered">
            @foreach($productsAll as $product)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                    <div class="fw-bold">{{$product->name}}</div>
                    {{$product->description}} | £{{number_format($product->price, 2)}}
                    </div>
                    <span class="badge bg-primary rounded-pill" style="cursor: pointer;">X</span>
                </li>
            @endforeach
            
        </ol>
    @endif
</div>
