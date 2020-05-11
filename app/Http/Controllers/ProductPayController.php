<?php

namespace App\Http\Controllers;

use App\Pay;
use App\Pro_pay;
use App\Product;
use Illuminate\Http\Request;

class ProductPayController extends Controller
{
    //
    public function index(){
        $pro_pays = Pro_pay::paginate(15);
        //dd($products);
        return view('admin.pro_pay',['pro_pays'=>$pro_pays]);

    }
    public function create()
    {
        $products = Product::all();
        $pays = Pay::all();
        return view('admin.pro_pay_create',['products'=>$products,'pays'=>$pays]);
    }

    public function store(Request $req){

        $pro_pay = new Pro_pay;
        $pro_pay->pro_id = $req->product_id;
        $pro_pay->pay_id = $req->pay_id;
        $pro_pay->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function destroy($pro_id,$pay_id){
        $pro_pay = Pro_pay::where('pro_id',$pro_id)->where('pay_id',$pay_id);
        $pro_pay->delete();
        return redirect()->back()->with('Product deleted');

    }
}
