<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;

Class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        //$order = new Order;
        return view('order.form');
    }

    public function saveOrder(Request $request)
    {
        $order = new \App\Models\Order();
        return view('order.thanks')
            ->with('order', $order);
    }
}
