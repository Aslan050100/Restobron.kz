<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_order extends Model
{
    //
    protected $table = 'menu_orders';

    public function reservations(){
         return $this->belongsTo('App\Reservation','res_id','id');
    }
    public function menus(){
         return $this->belongsTo('App\Menu','menu_id','id');
    }
}
