<?php

namespace App\Http\Livewire\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;
use App\Models\Product;

class Basket extends Component
{

    public $products;
    public $total;
    protected $listeners = ['basket' => 'render'];

    public function render()
    {
        
        $this->products = Cart::content();
        $this->total = Cart::total();

        return view('livewire.cart.basket');
    }

    public function removeProduct($rowId)
    {
        dd($rowId);
        Cart::remove($rowId);    
   
    }
}
