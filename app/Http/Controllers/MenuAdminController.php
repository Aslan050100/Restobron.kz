<?php

namespace App\Http\Controllers;

use App\Hour;
use App\Http\Resources\DishType;
use App\Product;
use App\Week;
use Illuminate\Http\Request;
use App\Menu;
use App\Dish_type;

class MenuAdminController extends Controller
{
    //
    public function index(){
        $menus = Menu::paginate(15);
        //dd($products);
        return view('admin.menu',['menus'=>$menus]);

    }
    public function create()
    {
        $dish_types = Dish_type::all();
        $weeks = Week::all();
        $products = Product::all();
        $hours = Hour::all();
        return view('admin.menu_create',['hours'=>$hours,'products'=>$products,'weeks'=>$weeks,'dish_types'=>$dish_types]);
    }

    public function store(Request $req){
        $menu = new Menu;
        $menu->name = $req->name;
        $menu->price = $req->price;
        $menu->description = $req->description;
        $menu->dish_type_id = $req->dish_type;
        $menu->pro_id = $req->product;
        $menu->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
        $menu = Menu::find($id);
        $products = Product::all();
        $dish_types = Dish_type::all();
        return view('admin.menu_edit',['products'=>$products,'menu'=>$menu,'dish_types'=>$dish_types]);
    }
    public function update(Request $req,$id){
        $menu = Menu::find($id);
        $menu->name = $req->name;
        $menu->price = $req->price;
        $menu->description = $req->description;
        $menu->dish_type_id = $req->dish_type;
        $menu->pro_id = $req->product;
        $menu->save();
        return redirect()->back()->with('alert', 'Data updated!');

    }
    public function destroy($id){
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->back()->with('Hour deleted');

    }
}
