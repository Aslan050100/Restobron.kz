<?php

namespace App\Http\Controllers;

use App\Hashtag;
use App\Pro_hash;
use App\Product;
use Illuminate\Http\Request;

class ProductHashtagController extends Controller
{
    //
    public function index(){
        $pro_hashes = Pro_hash::paginate(15);
        //dd($products);
        return view('admin.pro_hash',['pro_hashes'=>$pro_hashes]);

    }
    public function create()
    {
        $products = Product::all();
        $hashtages = Hashtag::all();
        return view('admin.pro_hash_create',['products'=>$products,'hashtag'=>$hashtages]);
    }

    public function store(Request $req){

        $pro_hash = new Pro_hash;
        $pro_hash->pro_id = $req->product_id;
        $pro_hash->hashtag_id = $req->hashtag_id;
        $pro_hash->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function destroy($pro_id,$hash_id){
        $pro_hash = Pro_hash::where('pro_id',$pro_id)->where('hashtag_id',$hash_id);
        $pro_hash->delete();
        return redirect()->back()->with('Product deleted');

    }
}
