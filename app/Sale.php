<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable=['price'];
    protected  $casts=['id'=>'integer'];
}
