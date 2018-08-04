<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'slug', 'original_price', 'price','description', 'content','product_code', 'category_id'];



    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function gallery_products(){
    	return $this->hasMany('App\GalleryProduct', 'product_id', 'id');
    }

    public function product_details(){
    	return $this->hasMany('App\ProductDetail');
    }

    public function vendor(){
    	return $this->belongsTo('App\Vendor');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag','product_tag', 'product_id', 'tag_id');
    }
}
