<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Average_check extends Model
{
    //
     protected $table = 'average_checks';


     public function products(){
         return $this->belongsToMany('App\Product','pro_aves','pro_id','average_id');
    }
}
