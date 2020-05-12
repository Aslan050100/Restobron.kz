<?php

namespace App\Http\Controllers;

use App\Average_check;
use App\City;
use App\Comfort;
use App\Feedback;
use App\Kitchen;
use App\Product;
use App\Reservation;
use Session;
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
        if(is_null($city_id)){
            Session::flash('message', "There is no such restaurant, choose again)   ");
            return redirect()->back();
        }else{
            $products = Product::where('city_id',$city_id->id)->paginate(3);
            $prices = Average_check::all();
            $comforts = Comfort::all();
            $kitchens = Kitchen::all();
            return view('simple.filter_page',['products'=>$products,'prices'=>$prices,'comforts'=>$comforts,'kitchens'=>$kitchens]);
        }

    }
    public function filter(Request $req){
        $price = $req->input('price');
        $kitchen = $req->input('kitchen');
        $comfort = $req->input('comfort');
        //dd($kitchen[0]);
        $pro_price = Average_check::find($price[0]);
        $pro_comf = Comfort::find($comfort[0]);
        $pro_kit = Kitchen::find($kitchen[0]);
        $products = Product::all();
        return redirect()->back();
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
    public function reservation($pro_id){
        $product = Product::find($pro_id);
        return view('simple.reservation',['product'=>$product]);
    }
    public function reserv(Request $req,$pro_id,$user_id){
        $date = $req->date;
        $time = $req->time;
        $adult = $req->adult;
        $comment = $req->comment;
        $reservation  = new Reservation;
        $reservation->date = $date;
        $reservation->user_id = $user_id;
        $reservation->time = $time;
        $reservation->adult = $adult;
        $reservation->pro_id = $pro_id;
        $reservation->comment = $comment;
        $reservation->pay = 1;
        $reservation->save();
        Session::flash('success', "Succesfull paid and reservation!!!");
        return view('simple.index');

    }
}
