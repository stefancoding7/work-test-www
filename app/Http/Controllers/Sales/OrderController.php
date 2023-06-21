<?php

namespace App\Http\Controllers\Sales;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $products = Cart::content();
        $total = Cart::total();
        return view('order.form', compact('products', 'total'));
    }

    public function saveOrder(Request $request)
    {
        
        return view('order.thanks')->with('order', $order);
    }
}
