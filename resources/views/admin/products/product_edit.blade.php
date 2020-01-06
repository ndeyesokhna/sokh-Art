
@extends('admin.layout.layout_admin')

@section('content')





<form action="{{route('product.update',['id'=>$product->id])}}
"  method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="name" class="form-control" placeholder="le nom du produit" value="{{$product->name}}"></div>
   <div><input type="text" name="price" class="form-control" placeholder="Le prix du produit" value="{{$product->price}}"> </div>
   <div> <textarea name="description" 
   id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$product->description}}</textarea> </div>
   <div class="row">
   <div class="col-6 text-right"><img src="{{asset($product->images)}}" alt="{{$product->name}}" width="100"></div><div class="col-6"><h3>Chargez une autre image pour remplacer celle-ci</h3></div>
</div>
<div>
   <input type="file" name="product_image" class="form-control">
</div>

   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
@endsection