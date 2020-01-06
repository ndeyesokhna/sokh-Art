<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wishlistController extends Controller
{
public function wishlist(){
    $products = \App\Product::orderBy('created_at', 'DESC')->get();
    return view('wishlist', compact('products'));
}
}
