<?php

namespace App\Http\Livewire\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;

class Basket extends Component
{
    public function render()
    {
        return view('livewire.cart.basket');
    }
}
