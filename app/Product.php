<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';


    public function ads(){
    	 return $this->hasMany('App\Ad','pro_id','id');
    }
    public function feedbacks(){
    	 return $this->hasMany('App\Feedback','pro_id','id');
    }
    public function hall_description(){
    	 return $this->belongsTo('App\Hall_description','hall_id','id');
    }
    public function city(){
         return $this->belongsTo('App\City','city_id','id');
    }
    public function menus(){
    	 return $this->hasMany('App\Menu','pro_id','id');
    }
    public function product_images(){
    	 return $this->hasMany('App\Product_image','id','pro_id');
    }
    public function pays(){
         return $this->belongsToMany('App\Pay','pro_pays','pro_id','pay_id');
    }
    public function kitchens(){
         return $this->belongsToMany('App\Kitchen','pro_kits','pro_id','kitchen_id');
    }
    public function parkings(){
         return $this->belongsToMany('App\Parking','pro_parkings','pro_id','parking_id');
    }
    public function comforts(){
         return $this->belongsToMany('App\Comfort','pro_coms','pro_id','comfort_id');
    }
    public function hashtags(){
         return $this->belongsToMany('App\Hashtag','pro_hashes','pro_id','hashtag_id');
    }
    public function average_checks(){
         return $this->belongsToMany('App\Average_check','pro_aves','pro_id','average_id');
    }
    public function reservations(){
         return $this->hasMany('App\Reservation','pro_id','id');
    }
    public function hours(){
         return $this->hasMany('App\Hour','pro_id','id');
    }

}
