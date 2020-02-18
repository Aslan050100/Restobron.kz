<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\City;
use App\Average_check;
use App\Kitchen;
use App\Comfort;

use App\Http\Resources\Product as ProductResource;
class ProductController extends Controller
{
    //
    public function getProducts(Request $req){
    	$city = $req->city;
    	$city_id = City::where('name',$city)->get();
    	$products = Product::where('city_id',$city_id[0]->id)->get();
    	return response()->json($products);
    }
    public function getPrice(){
    	$prices = Average_check::all();
    	return response()->json($prices);
    }
    public function getKitchens(){
    	$kitchens = Kitchen::all();
    	return response()->json($kitchens);	
    }
    public function getComforts(){
    	$comforts = Comfort::all();
    	return response()->json($comforts);	
    }

    public function getProductById($id){
    	$product = Product::find($id);
    	$average_checks = $product->average_checks;
    	$kitchens = $product->kitchens;
    	$comforts = $product->comforts;
    	$hours = $product->hours;
    	$product_images = $product->product_images;
    	//dd($product_images);
    	return new ProductResource($product);
    }
    
}
