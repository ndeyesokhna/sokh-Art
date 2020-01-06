<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

{
    protected $guarded = [];
   public function Catogory (){
       return $this->belongsTo("App\Category");
   }
   public function order(){
       return $this->belongsToMany("App\Order");
   }
}
