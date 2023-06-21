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

        $ids = [];

        //get all products IDs and save it in to array
        foreach($this->products as $p){
            $ids[] = $p->id;
        }

        //get all products where ID array
        $productsAll = Product::whereIn('id', $ids)->get();
        
        return view('livewire.cart.basket', compact('productsAll'));
    }
}
