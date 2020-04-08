<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reserv(Request $req,$pro_id){
        $date = $req->date;
        $time = $req->time;
        $adult = $req->adult;
        $comment = $req->other;
        $menu = $req->menu;
        $reservation  = new Reservation;
        $reservation->date = $date;
        $reservation->time = $time;
        $reservation->adult = $adult;
        $reservation->comment = $comment;
        if($menu == null){
            $reservation->menu = 0;
        }
        else{
            $reservation->menu = 1;
        }
        $reservation->pro_id = $pro_id;
        $reservation->save();
        return 'Data inserted!!!';

    }
}
