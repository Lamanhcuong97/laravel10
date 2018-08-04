<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table ="product_details";

    protected $fillable = ['product_id', 'size_id', 'color_id','quantity','discount'];

    public function order(){
    	return $this->belongsTo('App\Order');
    }

    public function product(){
    	return $this->belongsTo('App\Product', 'product_detail_id');
    }

    public function size(){
    	return $this->belongsTo('App\Size');
    }

    public function color(){
    	return $this->belongsTo('App\Color');
    }
}
