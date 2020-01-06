<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

use bar\baz\source_with_namespace;
use Illuminate\Http\Request;
use App\Product;
use  App\Category;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
        $categories = category::pluck('name','id');
        return view('products.create', compact('categories'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = new Product();
   //On verfie si une image est envoyée
   if($request->has('product_image')){
       //On enregistre l'image dans un dossier
       $image = $request->file('product_image');
       //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
       $image_name = Str::slug($request->input('name')).'_'.time();
       //Nous enregistrerons nos fichiers dans /uploads/images dans public
       $folder = '/uploads/images/';
       //Nous allons enregistrer le chemin complet de l'image dans la BD
       $produit->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
       //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
       $this->uploadImage($image, $folder, 'public', $image_name);
   }

        $data = $request->validate([
            //'name'=>'required|min:5',
          //  'price' => 'required|max:7|numeric',
            //'description' => 'max:1000000'
        ]);
    
        $produit->name = $request->input('name');
        $produit->price = $request->input('price');
        $produit->description = $request->input('description');
        $produit->catogory_id = $request->input('catogory_id');

        $produit->save();
        return redirect()->back();

    }

    /**
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
        $produit = Product::find($id);
        //on recupere le produit

        $categories = Category::pluck('name','id');
        return view('admin.products.product_edit', compact('produit','categories'));
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
        $product = Product::find($id);
        if($product){
            $product->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'catogory_id' => $request->input('catogory_id'),
            ]);
        }
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product)
            $product->delete();
        return redirect()->back();
     
    }
    
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }
     
}
