<?php

namespace App\Http\Controllers\Sales;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Order;
use App\Models\OrderProduct;

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


        $this->validate($request,[
            'full_name'=> 'required',
            'city' => 'required',
            'postcode' => 'required',
            'country' => 'required',
            'address' => 'required',
        ]);


        $user = auth()->user();
        $products = Cart::content();
        $total = Cart::total();


        $order = new Order;
        $order->customer_id = $user->id;
        $order->price = $total;
        $order->delivery_address = $this->saveAddress($request, $user);
        $order->save();

        foreach($products as $product){
            $order_product = new OrderProduct;
            $order_product->order_id = $order->id;
            $order_product->product_id = $product->id;
            $order_product->save();
        }


        Cart::destroy();

        return view('order.thanks')->with('order', $order);
    }

    public function saveAddress($request, $user)
    {
        
        $shipp_address = new \stdClass();
        $shipp_address->full_name = $request->full_name;
        $shipp_address->email = $user->email;
        $shipp_address->country = $request->country;
        $shipp_address->city = $request->city;
        $shipp_address->postcode = $request->postcode;
        $shipp_address->address = $request->address;
        $shhip = json_encode($shipp_address, true);
        return $shhip;
        
    }
}
