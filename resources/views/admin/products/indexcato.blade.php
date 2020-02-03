@extends('admin.layout.layout_admin')

@section('content')
<table class="table table-striped">
       <tr>
           <th>#</th>     
                <th>Categories des Produits</th>     
                     
       </tr>
       @foreach($catagories as $catagory)
           <tr>
               <th>#</th>
               <th>{{$catagory->name}}</th>
               <td> <form action="admin/indexcato/delete/{{$catagory->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>
           </td>
           </tr>
       @endforeach
   </table>

   @endsection