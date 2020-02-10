<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $table = 'reservations';

    public function products(){
         return $this->belongsTo('App\Product','pro_id','id');
    }

    public function menu_orders(){
         return $this->hasMany('App\Menu_order','res_id','id');
    }
}
