<?php

namespace App\Http\Controllers;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Resources\Menu as MenuResource;

class MenuController extends Controller
{
    //
    public function getMenus(){
        $menus = Menu::all();
        return MenuResource::collection($menus);
    }
}
