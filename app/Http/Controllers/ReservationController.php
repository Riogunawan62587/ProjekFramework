<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
