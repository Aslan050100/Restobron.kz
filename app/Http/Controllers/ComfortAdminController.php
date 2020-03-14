<?php

namespace App\Http\Controllers;

use App\Comfort;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComfortAdminController extends Controller{
    public function index(){
        $comforts = Comfort::paginate(15);
        //dd($products);
        return view('admin.comfort', ['comforts' => $comforts]);
    }

    public function create(){
        $comforts = Comfort::all();
        return view('admin.comfort_create', ['comforts' => $comforts]);
    }
    public function store(Request $req){
        //dd($req);
        $comfort = new comfort();
        $comfort->name = $req->name;
        $comfort->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req, $id){
        $comfort = comfort::where('id', $id)->first();
        $name = comfort::where('id', $comfort->name)->first();
        return view('admin.comfort_edit', ['comfort' => $comfort, 'name' => $name]);
    }

    public function update(Request $req, $id){
        //dd($req);

        $comfort = comfort::find($id);
        $comfort->name = $req->name;
        $comfort->save();

        return redirect()->back()->with('alert', 'Data updated!');

    }


    public function destroy($id){
        $comfort = comfort::find($id);
        $comfort->delete();
        return redirect()->back()->with('comfort deleted');
    }
}
