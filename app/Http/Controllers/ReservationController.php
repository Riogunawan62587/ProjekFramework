<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservations_Detail;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function simpan_reservasi(Request $request)
    {
        $simpan = new Reservations_Detail;
        $simpan->user_id         = Auth::user()->id;
        $simpan->jumlah_orang    = $request->jumlah_orang;
        $simpan->tanggal         = $request->tanggal;
        $simpan->jam             = $request->jam;
        $simpan->save();
        return redirect('/reservasi_saya');
    }

    public function my_reservation()
    {
        return view('my_reservation');
    }
}
