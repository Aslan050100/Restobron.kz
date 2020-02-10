<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';


    public function ads(){
    	 return $this->belongsTo('App\Ad','id','pro_id');
    }
}
