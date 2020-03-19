<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Http\Controllers\Controller;
use App\Average_check;
use Illuminate\Http\Request;

class AverageСheckAdminController extends Controller
{
    public function index(){
        $avgs = Average_check::paginate(15);
        //dd($products);
        return view('admin.average_check', ['avgs' => $avgs]);

    }

    public function create(){
        $avgs = Average_check::all();
        return view('admin.average_check_create', ['avgs' => $avgs]);
    }
    public function store(Request $req){
        //dd($req);
        $avg = new Average_check();
        $avg->price = $req->price;
        $avg->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

        public function edit(Request $req, $id){
            $avg = Average_check::where('id', $id)->first();
            $price = Average_check::where('id', $avg->price)->first();
            return view('admin.average_check_edit', ['avg' => $avg, 'price' => $price]);
        }

        public function update(Request $req, $id){
            //dd($req);

            $avg = Average_check::find($id);
            $avg->price = $req->price;
            $avg->save();

            return redirect()->back()->with('alert', 'Data updated!');

        }


    public function destroy($id){
        $avg = Average_check::find($id);
        $avg->delete();
        return redirect()->back()->with('Average check deleted');

    }
}
