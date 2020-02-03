@extends('admin.layout.layout_admin')

@section('content')
<div class="container">


    <form action="/catagory/traitement" method="post">
        @csrf
    <div class="row"><input type="text" name="name" id="name" class="form-control"
                            placeholder="ajouter un categories">
    </div>
   

    <div class="row">
        <button class="btn btn-primary">Valider</button>
    </div>
    </form>

</div>




@endsection


