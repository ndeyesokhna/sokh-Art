
@extends('layouts.app')
@section('content')
<div class="container">
<div>
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif
</div>
<form action="{{route('product.update',['id'=>$produit->id])}}" method="post">
    @csrf
    @method('patch')
    <h4 class="card-header">MODIFICATION</h4>
    <div><input type="text" name="name" class="form-control" placeholder="le nom du produit" value="{{$produit->name}}"></div>
    <div><input type="text" name="price" class="form-control" placeholder="Le prix du produit" value="{{$produit->price}}"> </div>

    <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$produit->description}}</textarea> </div>
    <div>
    <select name="catogory_id" id="catogory_id" class="form-control">
        <option value=""></option>
        @foreach($categories as $key => $value)
            <option value="{{$key}}" {{ $key = $produit->catogory_id ? 'selected="selected"':''}}>{{$value}}</option>
        @endforeach
    </select>
</div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>



</div>

@endsection
