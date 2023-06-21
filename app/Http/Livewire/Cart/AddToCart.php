<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class AddToCart extends Component
{

    public $product;

    public function render()
    {
        return view('livewire.cart.add-to-cart');
    }

    public function addToCart()
    {
        
    }
}
