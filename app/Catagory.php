<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $guarded = [];
    public function Products(){
        return $this->hasMany("App\Product");
    }
}
