<?php

namespace App\Http\Livewire\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;

class Basket extends Component
{

    public $products;
    protected $listeners = ['basket' => 'render'];

    public function render()
    {
        $this->products = Cart::content();

        return view('livewire.cart.basket');
    }
}
