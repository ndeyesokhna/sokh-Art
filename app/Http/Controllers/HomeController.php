<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Illuminate\Support\Facades\Auth;
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
        $catagories = \App\Catagory::orderBy('created_at', 'DESC')->get();
        return view('shop', compact('catagories', 'products'));
    }
    public function product_single(){
        $products = \App\Product::take(4)->get();
        return view('product_single', compact('products'));
    } 

    public function store(Request $request){

        $order = new Order();
       $order->address = $request->input('address');
      $order->email= $request->input('email');
      $order->total = $request->input('total');
      $order->product= $request->input('product');
      $order->ville = $request->input('ville');
      $order->telephone = $request->input('telephone');
      $order->user_id=Auth::user()->id;
      $order->save();
      return redirect()->back()->with(['success'=>'message envoyer']);
    }

        public function checkout() {

        $checkout = \App\Order::orderBy('created_at', 'DESC')->get();
        return view('checkout', compact('checkout'));

    }

    public function about($id){
        $product = \App\Product::find($id);
        return view('about' , compact('product'));
    }
    public function blog(){
        return view('blog');
    }
   // public function contact(){
        
       // return view('contact');
    //}
    public function affichcato($id){
        $cats = \App\Catagory::all();
        $products = \App\Product::where('catogory_id', $id)->get();
        return view('affichcato', compact('cats', 'products'));
    }
    public function verif(){
       
    }
    
   
}

