<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function shop(){
        return view('shop');
    }
    public function about(){
        return view('about');
    }
    public function blog(){
        return view('blog');
    }
public function contact(){
    return view('contact');
}
public function checkout(){
    return view('checkout');
}
public function cart(){
    return view('cart');
}
public function blog_single(){
    return view('blog_single');
}
public function product_single(){
    return view('product_single');
}

}
