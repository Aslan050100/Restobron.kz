<?php

namespace App\Http\Controllers;

use App\Kitchen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KitchenAdminController extends Controller
{
    public function index(){
        $kitchens = Kitchen::paginate(15);
        //dd($products);
        return view('admin.kitchen', ['kitchens' => $kitchens]);
    }

    public function create(){
        $kitchens = Kitchen::all();
        return view('admin.kitchen_create', ['kitchens' => $kitchens]);
    }
    public function store(Request $req){
        //dd($req);
        $kitchen = new kitchen();
        $kitchen->name = $req->name;
        $kitchen->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req, $id){
        $kitchen = kitchen::where('id', $id)->first();
        $name = kitchen::where('id', $kitchen->name)->first();
        return view('admin.kitchen_edit', ['kitchen' => $kitchen, 'name' => $name]);
    }

    public function update(Request $req, $id){
        //dd($req);

        $kitchen = kitchen::find($id);
        $kitchen->name = $req->name;
        $kitchen->save();

        return redirect()->back()->with('alert', 'Data updated!');

    }


    public function destroy($id){
        $kitchen = kitchen::find($id);
        $kitchen->delete();
        return redirect()->back()->with('kitchen deleted');
    }
}
