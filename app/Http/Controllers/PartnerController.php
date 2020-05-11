<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    //
    public function index(){
        return view('partner.index');
    }
    public function partnership(){
        return view('partner.partnership');
    }
}
