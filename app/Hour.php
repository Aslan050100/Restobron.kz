<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    //
     protected $table = 'hours';

     public function products(){
    	 return $this->belongsTo('App\Product','pro_id','id');
    }
}
