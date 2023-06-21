@extends('layouts.app')
@section('content')
    
    <h3>Order Placed</h3>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Thank You. Your order has been placed.</h1>
        </div>
        <div class="col-md-12">
            <div class="card own-card">
                <div class="card-body text-center">
                    <h3>Delivery Address</h3>
                    <p>{{$order->shippingAddress()['full_name']}}</p>
                    <p>{{$order->shippingAddress()['city']}}</p>
                    <p>{{$order->shippingAddress()['country']}}</p>
                    <p>{{$order->shippingAddress()['postcode']}}</p>
                    <p>{{$order->shippingAddress()['address']}}</p>
                    <hr>
                    <a href="{{route('/')}}" class="btn btn-primary rounded-pill">Home Page</a>
                </div>
            </div>
            
        </div>
    </div>
@endsection
