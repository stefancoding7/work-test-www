<?php

namespace App\Http\Controllers\Catalogue;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

Class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('catalogue.index', compact('products'));
    }


}
