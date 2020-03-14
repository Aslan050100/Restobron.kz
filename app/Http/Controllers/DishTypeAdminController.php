<?php

namespace App\Http\Controllers;

use App\Dish_type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DishTypeAdminController extends Controller{
    public function index(){
        $dish_types = dish_type::paginate(15);
        //dd($products);
        return view('admin.dish_type', ['dish_types' => $dish_types]);
    }

    public function create(){
        $dish_types = dish_type::all();
        return view('admin.dish_type_create', ['dish_types' => $dish_types]);
    }
    public function store(Request $req){
        //dd($req);
        $dish_type = new dish_type();
        $dish_type->name = $req->name;
        $dish_type->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req, $id){
        $dish_type = dish_type::where('id', $id)->first();
        $name = dish_type::where('id', $dish_type->name)->first();
        return view('admin.dish_type_edit', ['dish_type' => $dish_type, 'name' => $name]);
    }

    public function update(Request $req, $id){
        //dd($req);

        $dish_type = dish_type::find($id);
        $dish_type->name = $req->name;
        $dish_type->save();

        return redirect()->back()->with('alert', 'Data updated!');

    }


    public function destroy($id){
        $dish_type = dish_type::find($id);
        $dish_type->delete();
        return redirect()->back()->with('dish_type deleted');
    }
}
