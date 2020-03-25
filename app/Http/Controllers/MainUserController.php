<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainUserController extends Controller
{
    //
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        return "Login";
    }

    public function destroy()
    {
        auth()->logout();

        return "Logout";
    }
}
