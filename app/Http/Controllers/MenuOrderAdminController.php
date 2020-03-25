<?php

namespace App\Http\Controllers;

use App\Menu_order;
use App\Reservation;
use Illuminate\Http\Request;

class MenuOrderAdminController extends Controller
{
    //
    public function index(){
        $menu_orders = Menu_order::paginate(15);
        return view('admin.menu_order',['menu_orders'=>$menu_orders]);

    }
    public function destroy($id){
        $menu_order = Menu_order::find($id);
        $menu_order->delete();
        return redirect()->back()->with('Hour deleted');

    }
}
