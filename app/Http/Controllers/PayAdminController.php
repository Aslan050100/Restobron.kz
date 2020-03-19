<?php

namespace App\Http\Controllers;

use App\Pay;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayAdminController extends Controller
{
    public function index(){
        $pays = Pay::paginate(15);
        //dd($products);
        return view('admin.pay', ['pays' => $pays]);
    }

    public function create(){
        $pays = Pay::all();
        return view('admin.pay_create', ['pays' => $pays]);
    }
    public function store(Request $req){
        //dd($req);
        $pay = new pay();
        $pay->name = $req->name;
        $pay->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req, $id){
        $pay = pay::where('id', $id)->first();
        $name = pay::where('id', $pay->name)->first();
        return view('admin.pay_edit', ['pay' => $pay, 'name' => $name]);
    }

    public function update(Request $req, $id){
        //dd($req);

        $pay = pay::find($id);
        $pay->name = $req->name;
        $pay->save();

        return redirect()->back()->with('alert', 'Data updated!');

    }


    public function destroy($id){
        $pay = pay::find($id);
        $pay->delete();
        return redirect()->back()->with('pay deleted');
    }
}
