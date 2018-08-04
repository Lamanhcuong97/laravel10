<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function product_details(){
    	return $this->hasMany('App\ProductDetail');
    }
}
