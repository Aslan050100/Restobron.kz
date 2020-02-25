<?php

namespace App\Http\Controllers;

use App\Http\Resources\Ad as AdResource;
use Illuminate\Http\Request;
use App\Ad;
class AdController extends Controller
{
    //
    public function getAds(){
    	$ads = Ad::all();
    	return AdResource::collection($ads);
    }
}
