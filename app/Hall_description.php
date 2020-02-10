<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall_description extends Model
{
    //
     protected $table = 'hall_descriptions';

     public function products(){
    	 return $this->hasMany('App\Product','id','hall_id');
    }
}
