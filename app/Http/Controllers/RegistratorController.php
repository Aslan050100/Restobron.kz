<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistratorController extends Controller
{
    //
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return "Register";
    }


}
