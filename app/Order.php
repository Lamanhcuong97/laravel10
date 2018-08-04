<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function bill(){
    	return $this->belongsTo('App\Bill');
    }

    public function product_detail(){
    	return $this->hasOne('App\ProductDetail');
    }

}
