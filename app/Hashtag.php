<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    //
    protected $table = 'hastags';


    public function products(){
         return $this->belongsToMany('App\Product','pro_hashes','pro_id','hashtag_id');
    }
}
