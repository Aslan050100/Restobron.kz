<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    public function reserv(Request $req){
        $date = $req->date;
        $time = $req->time;
        $adult = $req->adult;
        $comment = $req->other;
        $menu = $req->menu;
        $pro_id = $req->pro_id;
        $reservation  = new Reservation;
        $reservation->date = $date;
        $reservation->time = $time;
        $reservation->adult = $adult;
        $reservation->comment = $comment;
        $reservation->menu = $menu;
        $reservation->pro_id = $pro_id;
        $reservation->save();
        return 'Data inserted!!!';

    }
}
