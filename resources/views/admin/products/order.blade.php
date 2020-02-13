@extends('admin.layout.layout_admin')

@section('content')


<div class="breadcome-area">
                        <div class="product-status mg-tb-15" style="background-color:white;">
                            <div class="container-fluid" style="background-color:white;">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-status-wrap">
                                            <h4>Liste des Commandes</h4>
                                            <table>
                                                <tr>
                                                    <th>Nom</th>
                        
                                                    <th>Ville</th>
                                                    <th>adresse</th>
                                                    <th>Nom du produit</th>
                                                    <th>Prix Total</th>
                                                    <th>Email</th>
                                                    <th>Telephone</th>
                                                </tr>
                                                <tr>
                                                    @foreach($orders as $order)
                                                    <td>{{$order->user->name}}</td>                                                   
                                                    <td>{{$order->ville}}</td>
                                                    <td>{{$order->address}}</td>
                                                    <td>{{$order->product}}</td>
                                                    <td>{{$order->total}}</td>
                                                    <td>{{$order->email}}</td>
                                                    <td>{{$order->telephone}}</td>
                                                

                                                

                                                <td>

                                                </td>

</tr>
@endforeach


@endsection