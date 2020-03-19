<?php

namespace App\Http\Controllers;
use App\Ad;
use App\Feedback;
use App\Product;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackAdminController extends Controller
{
    public function index(){
        $feedbacks = Feedback::paginate(15);
        //dd($products);
        return view('admin.feedback', ['feedbacks' => $feedbacks]);
    }

    public function create(){
        $products = Product::all();
        $feedbacks = Feedback::all();
        $users = User::all();
        return view('admin.feedback_create', ['feedbacks' => $feedbacks,'products'=>$products,'users'=>$users]);
    }
    public function store(Request $req){
        //dd($req);
        if ($files = $req->image) {
            //dd(123);
            $destinationPath = 'assets/images';      // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";
        }
        $feedback = new Feedback();
        $feedback->comment = $req->comment;
        $feedback->user_id = $req->user;
        $feedback->pro_id = $req->product;
        $feedback->image = $profileImage;
        $feedback->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req, $id){
        $feedback = Feedback::where('id',$id)->first();
        $product = Product::where('id',$feedback->pro_id)->first();
        $products = Product::all();
        $user = User::where('id',$feedback->user_id)->first();
        $users = User::all();
        return view('admin.feedback_edit',['feedback'=>$feedback,'product'=>$product,'products'=>$products,'user'=>$user,'users'=>$users]);
    }

    public function update(Request $req, $id)
    {
        //dd($req);
        if ($files = $req->file('image')) {
            //dd(123);
            $destinationPath = 'assets/products';      // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";
        }
        if($req->file('image') == null){
        $feedback = Feedback::find($id);
        $feedback->pro_id = $req->product;
        $feedback->user_id = $req->user;
        $feedback->save();

        return redirect()->back()->with('alert', 'Data updated!');
    }
    else{
            $feedback = Feedback::find($id);
            //dd($pro);
            $feedback->comment = $req->desc;
            $feedback->pro_id = $req->product;
            $feedback->user_id = $req->user;
            $feedback->image = $profileImage;
            $feedback->save();

            return redirect()->back()->with('alert', 'Data updated!');
        }
    }


    public function destroy($id){
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect()->back()->with('Feedback deleted');
    }
}
