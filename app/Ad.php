<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    //
    protected $table = 'ads';

    public function products(){
    	 return $this->belongsTo('App\Product','pro_id','id');
    }
}
