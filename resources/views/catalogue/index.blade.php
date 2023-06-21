@extends('layouts.app')
@section('content')
        

            
    
        @if($products->count() > 0)

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-6">
                            <div class="card own-card mb-4">
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
                </div>
                <div class="col-md-6">
    
                    @livewire('cart.basket')
                        
                </div>
            </div>
            
        @endif
    
            
        
@endsection

