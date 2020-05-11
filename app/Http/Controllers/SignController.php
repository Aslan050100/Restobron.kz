<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SignController extends Controller
{
    //
    public function signUp(){
        return view('simple.signUp');
    }
    public function store(Request $req)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //dd($req->partner);
        if($req->partner == 1){
            //dd($req->partner);
            //$user = User::create(request(['name', 'email', 'password','partner']));
            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = $req->password;
            $user->partner = $req->partner;
            $user->save();
        }
        else{
            $user = User::create(request(['name', 'email', 'password']));
        }

        auth()->login($user);
        $email = auth()->user()->email;
        $qwe  = User::where('email',$email)->first();
        if($qwe->partner == 1){
            return view('partner.index');
        }else{
            return view('simple.index');
        }
    }
    public function signIn(){
        return view('simple.signIn');
    }
    public function login()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        $email = auth()->user()->email;
        $qwe  = User::where('email',$email)->first();
        if($qwe->partner == 1){
            return view('partner.index');
        }else{
            return view('simple.index');
        }

    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->back();
    }

}
