@extends('layouts.app')
@section('content')
        

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    @if($products->count() > 0)
                        @foreach($products as $product)
                        <div>
                            <p>{{$product->sku}}</p>
                            <p>{{$product->description}}</p>
                            <p>{{$product->price}}</p>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        
@endsection

