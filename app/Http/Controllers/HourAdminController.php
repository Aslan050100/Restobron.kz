<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\Hour;
use Illuminate\Http\Request;
use App\Week;

class HourAdminController extends Controller
{
    public function index(){
        $hours = Hour::paginate(15);
        //dd($products);
        return view('admin.hour',['hours'=>$hours]);

    }
    public function create()
    {
        $weeks = Week::all();
        $products = Product::all();
        $hours = Hour::all();
        return view('admin.hour_create',['hours'=>$hours,'products'=>$products,'weeks'=>$weeks]);
    }

    public function store(Request $req){
        //dd($req);
        $hour = new Hour;
        $hour->pro_id = $req->product;
        $hour->monday = $req->monday;
        $hour->tuesday = $req->tuesday;
        $hour->wednesday = $req->wednesday;
        $hour->thursday = $req->thursday;
        $hour->friday = $req->friday;
        $hour->saturday = $req->saturday;
        $hour->sunday = $req->sunday;
        $hour->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
        $weeks = Week::all();
        $hour = Hour::where('id',$id)->first();
        $product = Product::where('id',$hour->pro_id)->first();
        $products = Product::all();
        return view('admin.hour_edit',['hour'=>$hour,'product'=>$product,'products'=>$products,'weeks'=>$weeks]);
    }
    public function update(Request $req,$id){
        $hour = Hour::find($id);
        $hour->pro_id = $req->product;
        $hour->monday = $req->monday;
        $hour->tuesday = $req->tuesday;
        $hour->wednesday = $req->wednesday;
        $hour->thursday = $req->thursday;
        $hour->friday = $req->friday;
        $hour->saturday = $req->saturday;
        $hour->sunday = $req->sunday;
        $hour->save();

        return redirect()->back()->with('alert', 'Data updated!');

    }
    public function destroy($id){
        $hour = Hour::find($id);
        $hour->delete();
        return redirect()->back()->with('Hour deleted');

    }
}
