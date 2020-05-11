<?php

namespace App\Http\Controllers;

use App\Average_check;
use App\City;
use App\Comfort;
use App\Feedback;
use App\Kitchen;
use App\Product;
use Illuminate\Http\Request;

class SimpleController extends Controller
{
    //
    public function index(){
        return view('simple.index');
    }
    public function filter_page(Request $req){
        $city = $req->city;
        $city_id = City::where('name',$city)->first();
        $products = Product::where('city_id','1')->paginate(5);
        $prices = Average_check::all();
        $comforts = Comfort::all();
        $kitchens = Kitchen::all();
        return view('simple.filter_page',['products'=>$products,'prices'=>$prices,'comforts'=>$comforts,'kitchens'=>$kitchens]);
    }
    public function detail($id){
        $product = Product::find($id);
        //dd($product->product_images[0]->image);
        return view('simple.detail',['product'=>$product]);
    }
    public function feedback(Request $req,$pro_id,$user_id){
        $comment = $req->comment;
        $feedback = new Feedback;
        $feedback->comment = $comment;
        $feedback->pro_id = $pro_id;
        $feedback->user_id = $user_id;
        $feedback->save();
        return redirect()->back();

    }
}
