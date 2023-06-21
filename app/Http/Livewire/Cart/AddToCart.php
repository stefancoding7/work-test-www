<?php

namespace App\Http\Livewire\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;
use App\Models\Product;

class AddToCart extends Component
{

    public $product;

    public function render()
    {
        return view('livewire.cart.add-to-cart');
    }

    public function addToCart($p)
    {
        $product = Product::find($p);
        Cart::add(
            $product->id,
            $product->name,
            1,
            $product->price,
            0,
            ['description' => $product->description]
        );

        $this->emit('basket');
    }
}
