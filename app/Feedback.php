<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
     protected $table = 'feedbacks';

    public function products(){
    	 return $this->belongsTo('App\Product','id','pro_id');
    }
    public function user(){
    	 return $this->belongsTo('App\User','id','user_id');
    }

}
