<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PartnerController extends Controller
{
    //
    public function index(){
        return view('partner.index');
    }
    public function partnership(){
        return view('partner.partnership');
    }
    public function add_product(Request $req){
        $product = new Product;
        $product->name = $req->name;
        $product->description = $req->description;
        $product->phone_number = $req->number;
        $product->address = $req->address;
        $product->map = $req->map;
        $product->city_id = 1;
        $product->save();
        return view('partner.index');
    }
}
