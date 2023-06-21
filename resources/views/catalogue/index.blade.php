@extends('layouts.app')
@section('content')
        

            
    
        @if($products->count() > 0)
            <div class="row">
                @foreach($products as $product)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->sku}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <p class="card-text"><b>£{{number_format($product->price, 2)}}</b></p>
                            @livewire('cart.add-to-cart', ['product' => $product], key($product->id))
                        </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
        @endif
    
            
        
@endsection

