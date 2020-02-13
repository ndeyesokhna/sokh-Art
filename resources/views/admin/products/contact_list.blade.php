@extends('admin.layout.layout_admin')

@section('content')


<div class="breadcome-area">
                        <div class="product-status mg-tb-15" style="background-color:white;">
                            <div class="container-fluid" style="background-color:white;">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-status-wrap">
                                            <h4>Liste des Contactes</h4>
                                            <table>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Email</th>
                                                    <th>Messages</th>
                                                   
                                                </tr>
                                                <tr>
                                                    @foreach($messages as $message)                                                   
                                                    <td>{{$message->name}}</td>
                                                    <td>{{$message->email}}</td>
                                                    <td>{{$message->message}}</td>
                                                    
                                                

                                                

                                                <td>

                                                </td>

</tr>
@endforeach


@endsection