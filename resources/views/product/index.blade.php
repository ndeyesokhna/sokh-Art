@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Image</th>
                <th>nom</th>
                <th>prix </th>
                <th> categorie</th>
                

            </tr>
            @foreach($products as $product)
            <tr>
                <th>#</th>
                <th>{{$product->name}}</th>
                <th>{{$product->price}} </th>
                <th> {{$product->catogory->name??''}}</th>

            <!--  <th>
            <p><a href="{{route('editer_produit',['id'=>$product->id])}}">Editer</a>
            </p>
              </th>
            </tr>-->
            @endforeach
        </table>
    </div>


   <!-- <div class="container">
        <form action="{{route('product.store')}}" method="post">
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
            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>-->

@endsection
