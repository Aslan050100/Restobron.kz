<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Ad;
use App\Hall_description;


class TestController extends Controller
{
    //
    public function test(){
    	$product = Product::first();
    	dd($product->hall_descriptions);
    	$hall_descriptions = Hall_description::get();
    	dd($hall_descriptions[0]->products);
    }

}
