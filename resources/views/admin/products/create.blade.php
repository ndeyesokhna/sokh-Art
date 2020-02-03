
@extends('admin.layout.layout_admin')

@section('content')
   <div class="container">
       <div><h1>{{__('Enregistrement d\'un produit')}}</h1></div>
       <div class="container">
       @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach 
        @endif

           <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div>
                   <input type="text" name="name" class="form-control" placeholder="le nom du produit">
               </div>
               <div>
                   <input type="text" name="price" class="form-control" placeholder="Le prix du produit">
               </div>
               <div>
                   <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
               </div>
              
               <div><input type="file" name="product_image" class="form-control"></div>
               <div><label>Categories</label>
                <select name="catogory_id" id="catogory_id" class="form-control">
                    <option value=""></option>
                    @foreach($categories as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                </div>
                <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
            </form>
        </div>
    </div>
@endsection





