<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
     protected $table = 'feedbacks';

    public function products(){
    	 return $this->belongsTo('App\Product','pro_id','id');
    }
    public function user(){
    	 return $this->belongsTo('App\User','user_id','id');
    }

}
