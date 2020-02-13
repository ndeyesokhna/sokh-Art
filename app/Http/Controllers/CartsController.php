<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartsController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**cartction create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
       $duplicata =  cart::search(function($cartItem,$rowId)use ($request)
         {
             return $cartItem->id==$request->product_id;
         });
         if($duplicata->isNotEmpty()){
            return redirect()->route('shop')->with('success' ,'le produit a deja ete ajouter');    
         }
         $product = Product::find($request->product_id);
        cart::add($product->id ,$product->name ,1, $product->price,  ['image'=>$product->image] );

        return redirect()->route('shop')->with('success' ,'le produit a bien ete ajouter');
    }

    /**name
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
       Cart::remove($rowId);
     
        return back()->with('success', 'le produit a ete bien supprimer');
    }
    public function cart(){
       
        return view("cart");
    }
     
     
}
