<?php

namespace App\Http\Controllers;

use App\Hour;
use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationAdminController extends Controller
{
    //
    public function index(){
        $reservations = Reservation::paginate(15);
        return view('admin.reservation',['reservations'=>$reservations]);

    }
    public function destroy($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->back()->with('Hour deleted');

    }
}
