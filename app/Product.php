<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

{
    protected $guarded = [];
   public function catogory (){
       return $this->belongsTo("App\Catagory");
   }
   public function order(){
       return $this->belongsToMany("App\Order");
   }

}