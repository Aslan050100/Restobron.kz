<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish_type extends Model
{
    //
     protected $table = 'dish_types';

     public function menus(){
    	 return $this->hasMany('App\Menu','dish_type_id','id');
    }
}
