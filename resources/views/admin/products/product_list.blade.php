@extends('admin.layout.layout_admin')

@section('content')
<!-- Mobile Menu end -->
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                    
                            
                                               
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Accueil</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Liste des Prroduits</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Liste des Produits</h4>
                            <div class="add-product">
                        
                            </div>
                            <table>
                                <tr>
                                    <th>Image</th>
                                    <th>Nom</th>
        
                                    <th>Description</th>
                                    <th>Prix</th>
                                    <th>category</th>
                                    <th>Modifier</th>
                                    <th>Supprimer</th>
                                </tr>
                                <tr>
                                    @foreach($products as $product)
  <td><img src="{{$product->image ? asset($product->image) : asset('uploads/images/default.png')}}" alt="{{$product->name}}" width="50"></td>
                                    <td>{{$product->name}}</td>
                                    
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->catogory->name ??''}}</td>
                                  

                                   

                                 <td>
                
                                          
                                             <p><a href="{{route('product.edit',['id'=>$product->id])}}">Edit</a></p></i></button>

                    
                                       
                                    </td>
                                    <td> <form action="product/delete/{{$product->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>
           </td>

                                </tr>
                                @endforeach
                                
                                
                            </table>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection