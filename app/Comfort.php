<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comfort extends Model
{
    //
     protected $table = 'comforts';
     public function products(){
         return $this->belongsToMany('App\Product','pro_coms','comfort_id','pro_id');
    }
}
