<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    //
    protected $table = 'parkings';

    public function products(){
         return $this->belongsToMany('App\Product','pro_parkings','pro_id','parking_id');
    }
}
