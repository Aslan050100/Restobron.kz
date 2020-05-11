<?php

namespace App\Http\Controllers;

use App\Average_check;
use App\City;
use App\Comfort;
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
        $city_id = City::where('name',$city)->get();
        $products = Product::where('city_id',$city_id[0]->id)->get();
        $prices = Average_check::all();
        $comforts = Comfort::all();
        return view('simple.filter_page',['products'=>$products,'prices'=>$prices,'comforts'=>$comforts]);
    }
    public function detail($id){
        $product = Product::find($id);
        //dd($product->product_images[0]->image);
        return view('simple.detail',['product'=>$product]);
    }
}
