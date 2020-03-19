<?php

namespace App\Http\Controllers;

use App\Parking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParkingAdminController extends Controller
{
    public function index(){
        $parkings = Parking::paginate(15);
        //dd($products);
        return view('admin.parking', ['parkings' => $parkings]);
    }

    public function create(){
        $parkings = Parking::all();
        return view('admin.parking_create', ['parkings' => $parkings]);
    }
    public function store(Request $req){
        //dd($req);
        $parking = new parking();
        $parking->name = $req->name;
        $parking->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req, $id){
        $parking = parking::where('id', $id)->first();
        $name = parking::where('id', $parking->name)->first();
        return view('admin.parking_edit', ['parking' => $parking, 'name' => $name]);
    }

    public function update(Request $req, $id){
        //dd($req);

        $parking = parking::find($id);
        $parking->name = $req->name;
        $parking->save();

        return redirect()->back()->with('alert', 'Data updated!');

    }


    public function destroy($id){
        $parking = parking::find($id);
        $parking->delete();
        return redirect()->back()->with('parking deleted');
    }
}
