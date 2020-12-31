<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\User;
use App\Table;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function my_reservation()
    {
        return view('my_reservation');
    }

    public function reservations_list(){
      $reservations = Reservation::all();
      $users_id = Reservation::all()->pluck('user_id');
      $tables_id = Reservation::all()->pluck('table_id');
      $users = User::whereIn('id',$users_id)->get();
      $tables = Table::whereIn('id',$tables_id)->get();

      return view('admin.daftarReservasi',compact('reservations','users','tables'));
    }
}
