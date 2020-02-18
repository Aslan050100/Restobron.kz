<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ad;
class AdController extends Controller
{
    //
    public function getAds(){
    	$ads = Ad::all();
    	return response()->json($ads); 
    }
}
