<?php

namespace App\Http\Controllers;

use App\Hall_description;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HallDescriptionAdminController extends Controller{
    public function index(){
        $hall_descriptions = hall_description::paginate(15);
        //dd($products);
        return view('admin.hall_description', ['hall_descriptions' => $hall_descriptions]);
    }

    public function create(){
        $hall_descriptions = hall_description::all();
        return view('admin.hall_description_create', ['hall_descriptions' => $hall_descriptions]);
    }
    public function store(Request $req){
        //dd($req);
        $hall_description = new hall_description();
        $hall_description->name = $req->name;
        $hall_description->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req, $id){
        $hall_description = hall_description::where('id', $id)->first();
        $name = hall_description::where('id', $hall_description->name)->first();
        return view('admin.hall_description_edit', ['hall_description' => $hall_description, 'name' => $name]);
    }

    public function update(Request $req, $id){
        //dd($req);

        $hall_description = hall_description::find($id);
        $hall_description->name = $req->name;
        $hall_description->save();

        return redirect()->back()->with('alert', 'Data updated!');

    }


    public function destroy($id){
        $hall_description = hall_description::find($id);
        $hall_description->delete();
        return redirect()->back()->with('hall_description deleted');
    }

}
