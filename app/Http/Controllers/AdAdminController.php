<?php

namespace App\Http\Controllers;

use App\City;
use App\Hall_description;
use App\Ad;
use App\Product;
use Illuminate\Http\Request;

class AdAdminController extends Controller
{
    //
    public function index(){
        $ads = Ad::paginate(15);
        //dd($products);
        return view('admin.ad',['ads'=>$ads]);

    }
    public function create()
    {
        $ads = Ad::all();
        return view('admin.ad_create',['ads'=>$ads]);
    }

    public function store(Request $req){
        //dd($req);

        if ($files = $req->image) {
            //dd(123);
            $destinationPath = 'assets/images';      // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";
        }
        $ad = new Ad;
        $ad->name = $req->name;
        $ad->description = $req->desc;
        $ad->pro_id = $req->product;
        $ad->image = $profileImage;
        $ad->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
        $ad = Ad::where('id',$id)->first();
        $product = Product::where('id',$ad->pro_id)->first();
        $products = Product::all();
        return view('admin.ad_edit',['ad'=>$ad,'product'=>$product,'products'=>$products]);
    }
    public function update(Request $req,$id){
        //dd($req);
        if ($files = $req->file('image')) {
            //dd(123);
            $destinationPath = 'assets/products';      // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";
        }
        if($req->file('image') == null){
            $ad = Ad::find($id);
            //dd($pro);
            $ad->name = $req->name;
            $ad->description = $req->desc;
            $ad->pro_id = $req->product;
            $ad->save();

            return redirect()->back()->with('alert', 'Data updated!');
        }
        else{
            $ad = Ad::find($id);
            //dd($pro);
            $ad->name = $req->name;
            $ad->description = $req->desc;
            $ad->pro_id = $req->product;
            $ad->video = $profileImage;
            $ad->save();

            return redirect()->back()->with('alert', 'Data updated!');
        }
    }
    public function destroy($id){
        $ad = Ad::find($id);
        $ad->delete();
        return redirect()->back()->with('Ad deleted');

    }
}
