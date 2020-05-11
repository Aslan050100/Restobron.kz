<?php

namespace App\Http\Controllers;

use App\Kitchen;
use App\Pro_kit;
use App\Product;
use Illuminate\Http\Request;

class ProductKitchenController extends Controller
{
    //
    public function index(){
        $pro_kits = Pro_kit::paginate(15);
        //dd($products);
        return view('admin.pro_kit',['pro_kits'=>$pro_kits]);

    }
    public function create()
    {
        $products = Product::all();
        $kitchens = Kitchen::all();
        return view('admin.pro_kit_create',['products'=>$products,'kitchens'=>$kitchens]);
    }

    public function store(Request $req){

        $pro_kit = new Pro_kit;
        $pro_kit->pro_id = $req->product_id;
        $pro_kit->kitchen_id = $req->kitchen_id;
        $pro_kit->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function destroy($pro_id,$com_id){
        $pro_kit = Pro_kit::where('pro_id',$pro_id)->where('kitchen_id',$com_id);
        $pro_kit->delete();
        return redirect()->back()->with('Product deleted');

    }
}
