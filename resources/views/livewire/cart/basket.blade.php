<div>
    <div class="card own-card {{$products->count() > 0 ? 'shadow-lg' : ''}}">
        <div class="card-body">
            <h3>Basket ({{$products->count()}})</h3>
            @if($products && $products->count() > 0)
                <ol class="list-group list-group-numbered">
                    @foreach($products as $key => $product)
                        <li  class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">{{$product->name}}</div>
                            {{$product->options['description']}} | £{{number_format($product->price, 2)}}
                            </div>
                            <span wire:click="removeProduct( {{ '"'.$product->rowId.'"' }} )" class="badge bg-danger rounded-pill" style="cursor: pointer;">X</span>
                        </li>
                    @endforeach
                    
                </ol>
                <hr>
                @auth
                    <div class="d-flex justify-content-between">
                        <p>Total: <b>£{{$total}}</b></p>
                        <a href="{{route('order-form')}}" class="btn btn-outline-primary rounded-pill">Go To Checkout <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                @endauth

                @guest
                    <div class="d-flex justify-content-between">
                        <p>Total: <b>£{{$total}}</b></p>
                        <a href="{{route('login')}}" class="btn btn-outline-primary rounded-pill">Login</a>
                    </div>
                @endguest
            @endif
        </div>
    </div>
</div>
