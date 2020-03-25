<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table = 'menus';

    public function products(){
    	 return $this->belongsTo('App\Product','pro_id','id');
    }
    public function dish_types(){
    	 return $this->belongsTo('App\Dish_type','dish_type_id','id');
    }
    public function menu_orders(){
         return $this->hasMany('App\Menu_order','menu_id','id');
    }
}
