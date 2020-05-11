<?php

namespace App\Http\Controllers;

use App\Average_check;
use App\Pro_ave;
use App\Product;
use Illuminate\Http\Request;

class ProductAverageCheckController extends Controller
{
    //
    public function index(){
        $pro_aves = Pro_ave::paginate(15);
        //dd($products);
        return view('admin.pro_ave',['pro_aves'=>$pro_aves]);

    }
    public function create()
    {
        $products = Product::all();
        $averages = Average_check::all();
        return view('admin.pro_ave_create',['products'=>$products,'averages'=>$averages]);
    }

    public function store(Request $req){

        $pro_ave = new Pro_ave;
        $pro_ave->pro_id = $req->product_id;
        $pro_ave->average_id = $req->average_id;
        $pro_ave->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function destroy($pro_id,$ave_id){
        $pro_ave = Pro_ave::where('pro_id',$pro_id)->where('average_id',$ave_id);
        $pro_ave->delete();
        return redirect()->back()->with('Product deleted');

    }
}
