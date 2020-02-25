<?php

namespace App\Http\Controllers;

use App\Hall_description;
use App\City;
use Illuminate\Http\Request;

use App\Product;
class ProductAdminController extends Controller
{
    //
    public function index(){
        $products = Product::paginate(15);
        //dd($products);
        return view('admin.product',['products'=>$products]);

    }
    public function create()
    {
        $cities = City::all();
        $hall_descriptions = Hall_description::all();
        return view('admin.product_create',['cities'=>$cities,'hall_descriptions'=>$hall_descriptions]);
    }

    public function store(Request $req){
        //dd($req);

        if ($files = $req->video) {
            //dd(123);
            $destinationPath = 'assets/videos';      // upload path
            $profileVideo = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileVideo);
            $insert['video'] = "$profileVideo";
        }
        $product = new Product;
        $product->name = $req->name;
        $product->description = $req->desc;
        $product->map = $req->map;
        $product->phone_number = $req->phone_number;
        $product->address = $req->address;
        $product->data_open = $req->data_open;
        $product->seats = $req->seats;
        $product->city_id = $req->city;
        $product->hall_id = $req->hall_desc;
        $product->video = $profileVideo;
        $product->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
        $product = Product::where('id',$id)->first();
        $hall_desc = Hall_description::where('id',$product->hall_id)->first();
        $city = City::where('id',$product->city_id)->first();
        $cities = City::all();
        $hall_descriptions = Hall_description::all();
        return view('admin.product_edit',['product'=>$product,'hall_desc'=>$hall_desc,'city'=>$city,'hall_descriptions'=>$hall_descriptions,'cities'=>$cities]);
    }
    public function update(Request $req,$id){
        //dd($req);
        if ($files = $req->file('video')) {
            //dd(123);
            $destinationPath = 'assets/videos';      // upload path
            $profileVideo = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileVideo);
            $insert['video'] = "$profileVideo";
        }
        if($req->file('video') == null){
            $product = Product::find($id);
            //dd($pro);
            $product->name = $req->name;
            $product->description = $req->desc;
            $product->map = $req->map;
            $product->phone_number = $req->phone_number;
            $product->address = $req->address;
            $product->data_open = $req->data_open;
            $product->seats = $req->seats;
            $product->city_id = $req->city;
            $product->hall_id = $req->hall_desc;
            $product->save();

            return redirect()->back()->with('alert', 'Data updated!');
        }
        else{
            $product = Product::find($id);
            //dd($pro);
            $product->name = $req->name;
            $product->description = $req->desc;
            $product->map = $req->map;
            $product->phone_number = $req->phone_number;
            $product->address = $req->address;
            $product->data_open = $req->data_open;
            $product->seats = $req->seats;
            $product->city_id = $req->city;
            $product->hall_id = $req->hall_desc;
            $product->video = $profileVideo;
            $product->save();

            return redirect()->back()->with('alert', 'Data updated!');
        }
    }
    public function destroy($id){
        $pro = Product::find($id);
        $pro->delete();
        return redirect()->back()->with('Product deleted');

    }
}
