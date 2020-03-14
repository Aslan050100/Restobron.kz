<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\Hour;
use Illuminate\Http\Request;

class HourAdminController extends Controller
{
    public function index(){
        $hours = Hour::paginate(15);
        //dd($products);
        return view('admin.hour',['hours'=>$hours]);

    }
    public function create()
    {
        $products = Product::all();
        $hours = Hour::all();
        return view('admin.hour_create',['hours'=>$hours,'products'=>$products]);
    }

    public function store(Request $req){
        //dd($req);
        $hour = new Hour;
        $hour->pro_id = $req->product;
        $hour->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
        $hour = Hour::where('id',$id)->first();
        $product = Product::where('id',$hour->pro_id)->first();
        $products = Product::all2();
        return view('admin.hour_edit',['hour'=>$hour,'product'=>$product,'products'=>$products]);
    }
    public function update(Request $req,$id){
        //dd($req);
            $hour = Hour::find($id);
            //dd($pro);
            $hour->pro_id = $req->product;
            $hour->save();

            return redirect()->back()->with('alert', 'Data updated!');

    }
    public function destroy($id){
        $hour = Hour::find($id);
        $hour->delete();
        return redirect()->back()->with('Hour deleted');

    }
}
