<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    //
    protected $table = 'product_images';

    public function products(){
    	 return $this->belongsTo('App\Product','pro_id','id');
    }
}
