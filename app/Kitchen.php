<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    //
    protected $table = 'kitchens';

    public function products(){
         return $this->belongsToMany('App\Product','pro_kits','kitchen_id','pro_id');
    }
}
