<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    //
    protected $table = 'pays';

    public function products(){
         return $this->belongsToMany('App\Product','pro_pays','pro_id','pay_id');
    }
}
