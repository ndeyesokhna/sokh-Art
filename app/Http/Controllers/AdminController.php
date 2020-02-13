<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use  App\Catagory;

class AdminController extends Controller
{
    public function product_list(){
        $products = Product::all();
        return view('admin.products.product_list', compact('products'));
    }
    public function product_edit($id){
        $product= Product::find($id);
        $categories = Catagory::pluck('name','id');
        return view('admin/products/product_edit', compact('product','categories'));


    }
    public function create()
    {

        $categories = Catagory::pluck('name','id');
        return view('admin.products.create', compact('categories'));
    }
public function store(Request $request){
    
        $data = $request->validate([
            'name'=>'required|min:5',
            'price' => 'required|max:7|numeric',
            'description' => 'max:1000000'
        ]);
    $produit = new Product();
   $produit->name = $request->input('name');
   $produit->price = $request->input('price');
   $produit->description = $request->input('description');
   $produit->save();
   return redirect('/');
 $produit->catogory_id = $request->input('catogory_id');
}
public function index(){
   $products = \App\Product::orderBy('created_at', 'DESC')->get();
   return view('products.index', compact('products'));
}


public function update(Request $request, $id)
{
   $product = Product::find($id);
   if($product){
       $product->update([
           'name' => $request->input('name'),
           'price' => $request->input('price'),
           'description' => $request->input('description'),
           'category_id' => $request->input('category_id'),
       ]);
   }
   return redirect('admin/products/product_list');
}

public function product_delete($id)
{
    $product = Product::find($id);
    if($product)
        $product->delete();
    return redirect()->back();
}

public function order()
{
    $orders= Order::all();
  return view( 'admin.products.order' , compact('orders'));
}


}
