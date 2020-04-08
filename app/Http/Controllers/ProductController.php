<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Http\Resources\AverageCheck as AverageCheckResource;
use App\Http\Resources\Comfort as ComfortResource;
use App\Http\Resources\Feedback as FeedbackResource;
use App\Http\Resources\Kitchen as KitchenResource;
use Illuminate\Http\Request;
use App\Product;
use App\City;
use App\Average_check;
use App\Kitchen;
use App\Comfort;
use App\Http\Resources\MainProduct as MainProductResource;

use App\Http\Resources\Product as ProductResource;
use phpDocumentor\Reflection\Types\Collection;

class ProductController extends Controller
{
    //
    public function getProducts(Request $req){
    	$city = $req->city;
    	$city_id = City::where('name',$city)->get();
    	$products = Product::where('city_id',$city_id[0]->id)->get();
        return MainProductResource::collection($products);
    }
    public function getPrice(){
    	$prices = Average_check::all();
    	return AverageCheckResource::collection($prices);
    }

    public function getComforts(){
    	$comforts = Comfort::all();
    	return ComfortResource::collection($comforts);
    }

    public function getProductById($id){
    	$product = Product::find($id);
    	return new ProductResource($product);
    }
    public function addFeedback(Request $req,$pro_id,$user_id){
        $comment = $req->comment;
        $feedback = new Feedback;
        $feedback->comment = $comment;
        $feedback->pro_id = $pro_id;
        $feedback->user_id = $user_id;
        $feedback->save();
        return 'Feedback inserted!';

    }

}
