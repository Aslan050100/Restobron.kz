<?php

namespace App\Http\Controllers;

use App\Hashtag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HashtagAdminController extends Controller
{
    public function index(){
        $hashtags = Hashtag::paginate(15);
        //dd($products);
        return view('admin.hashtag', ['hashtags' => $hashtags]);
    }

    public function create(){
        $hashtags = Hashtag::all();
        return view('admin.hashtag_create', ['hashtags' => $hashtags]);
    }
    public function store(Request $req){
        //dd($req);
        $hashtag = new hashtag();
        $hashtag->name = $req->name;
        $hashtag->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req, $id){
        $hashtag = hashtag::where('id', $id)->first();
        $name = hashtag::where('id', $hashtag->name)->first();
        return view('admin.hashtag_edit', ['hashtag' => $hashtag, 'name' => $name]);
    }

    public function update(Request $req, $id){
        //dd($req);

        $hashtag = hashtag::find($id);
        $hashtag->name = $req->name;
        $hashtag->save();

        return redirect()->back()->with('alert', 'Data updated!');

    }


    public function destroy($id){
        $hashtag = hashtag::find($id);
        $hashtag->delete();
        return redirect()->back()->with('hashtag deleted');
    }
}
