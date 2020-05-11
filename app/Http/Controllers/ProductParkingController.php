<?php

namespace App\Http\Controllers;
use App\Pro_parking;
use App\Product;
use App\Parking;
use Illuminate\Http\Request;

class ProductParkingController extends Controller
{
    //
    public function index(){
        $pro_parkings = Pro_parking::paginate(15);
        //dd($products);
        return view('admin.pro_parking',['pro_parkings'=>$pro_parkings]);

    }
    public function create()
    {
        $products = Product::all();
        $parkings = Parking::all();
        return view('admin.pro_parking_create',['products'=>$products,'parkings'=>$parkings]);
    }

    public function store(Request $req){

        $pro_parking = new Pro_parking;
        $pro_parking->pro_id = $req->product_id;
        $pro_parking->parking_id = $req->parking_id;
        $pro_parking->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function destroy($pro_id,$parking_id){
        $pro_parking = pro_parking::where('pro_id',$pro_id)->where('parking_id',$parking_id);
        $pro_parking->delete();
        return redirect()->back()->with('Product deleted');

    }
}
