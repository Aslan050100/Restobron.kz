<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CityAdminController extends Controller{
    public function index(){
        $cities = City::paginate(15);
        //dd($products);
        return view('admin.city', ['cities' => $cities]);
    }

    public function create(){
        $cities = City::all();
        return view('admin.city_create', ['cities' => $cities]);
    }
    public function store(Request $req){
        //dd($req);
        $city = new City();
        $city->name = $req->name;
        $city->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req, $id){
        $city = City::where('id', $id)->first();
        $name = City::where('id', $city->name)->first();
        return view('admin.city_edit', ['city' => $city, 'name' => $name]);
    }

    public function update(Request $req, $id){
        //dd($req);

        $city = City::find($id);
        $city->name = $req->name;
        $city->save();

        return redirect()->back()->with('alert', 'Data updated!');

    }


    public function destroy($id){
        $city = City::find($id);
        $city->delete();
        return redirect()->back()->with('City deleted');
    }
}
