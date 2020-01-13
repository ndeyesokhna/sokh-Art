<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // return view('admin/products/product_list');
        $products = Product::all();
        return view('home', compact('products'));
       
    }
    public function home(){
        return view('home');
    }
    public function shop(){
        $products = \App\Product::orderBy('created_at', 'DESC')->get();
        return view('shop', compact('products'));
    }
    public function product_single(){
        $products = \App\Product::take(4)->get();
        return view('product_single', compact('products'));
    } 

 public function cart(){
    $products = \App\Product::take(3)->get();
    return view('cart', compact('products'));
    }  
    public function checkout(){
        return view('checkout');
    } 
    public function about(){
        $products = \App\Product::take(1)->get();
        return view('about' , compact('products'));
    }
    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
  

}
