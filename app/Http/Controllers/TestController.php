<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Ad;
	

class TestController extends Controller
{
    //
    public function test(){
    	$id = 1
    	$products = Product::find($id);
    	dd($products->ads);
    }
}
