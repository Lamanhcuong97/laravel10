<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public function bills(){
    	return $this->hasMany('App\Bill');
    }
}
