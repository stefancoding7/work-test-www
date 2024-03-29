@extends('layouts.app')
@section('content')
    
    <h3>Place Order</h3>
    <hr>
    <form action="{{route('save-order')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <label for="full-name">Full Name<sup>*</sup></label>
                        
                        <input class="form-control mb-3 @error('full_name') is-invalid @enderror" type="text" name="full_name" id="full-name" placeholder="Full Name">
                    </div>
                    <div class="col-md-12">
                        <label for="country">Country<sup>*</sup></label>
                        <input class="form-control mb-3 @error('country') is-invalid @enderror" type="text" name="country" id="country" placeholder="Country" >
                    </div>
                    <div class="col-md-12">
                        <label for="postcode">Postcode<sup>*</sup></label>
                        <input class="form-control mb-3 @error('postcode') is-invalid @enderror" type="text" name="postcode" id="postcode" placeholder="Postcode" >
                    </div>
                    <div class="col-md-12">
                        <label for="city">City<sup>*</sup></label>
                        <input class="form-control mb-3 @error('city') is-invalid @enderror" type="text" name="city" id="city" placeholder="City" >
                    </div>
                    <div class="col-md-12">
                        <label for="address">Address<sup>*</sup></label>
                        <input class="form-control mb-3 @error('address') is-invalid @enderror" type="text" name="address" id=address" placeholder="Address" >
                    </div>
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="card own-card ">
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
                                        
                                    </li>
                                @endforeach
                                
                            </ol>
                            <hr>
                            @auth
                                <div class="d-flex justify-content-between">
                                    <p>Total: <b>£{{$total}}</b></p>
                                    <button type="submit"  class="btn btn-outline-primary rounded-pill">Place Order <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                </div>
                            @endauth

                            
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
