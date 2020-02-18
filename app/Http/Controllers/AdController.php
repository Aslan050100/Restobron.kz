<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;
class AdController extends Controller
{
    //
    public function getAds(){
    	$ads = Ad::all();
    	return response()->json($ads); 
    }
}
