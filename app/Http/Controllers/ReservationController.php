<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\User;
use App\Table;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function simpan_reservasi(Request $request)
    {
        $simpan = new Reservation;
        $simpan->tanggal         = $request->tanggal;
        $simpan->jam             = $request->jam;
        $simpan->jumlah_orang    = $request->jumlah_orang;
        $simpan->status          = 0;
        $simpan->user_id         = Auth::user()->id;
        $simpan->save();
        return redirect('/reservasi_saya');
    }

    public function my_reservation()
    {
        $reservasi_saya = Reservation::where('user_id', Auth::user()->id)->get();
        return view('my_reservation', compact('reservasi_saya'));
    }

    public function simpan_bukti_pembayaran(Request $request)
    {
        $bukti = Reservation::where('id', $request->reservasiid)->first();
        if ($request->hasFile('bukti')) {
            $request->file('bukti')->move('assets/img', $request->file('bukti')->getClientOriginalName());
            $bukti->bukti_pembayaran = $request->file('bukti')->getClientOriginalName();
        }
        $bukti->bukti_pembayaran = $request->file('bukti')->getClientOriginalName();
        $bukti->update();
        return redirect('/reservasi_saya')->with('success', 'Bukti pembayaran berhasil dikirimkan!');
    }

    public function reservations_list()
    {
        $reservations = Reservation::all();
        $users_id = Reservation::all()->pluck('user_id');
        $tables_id = Reservation::all()->pluck('table_id');
        $users = User::whereIn('id', $users_id)->get();
        $tables = Table::whereIn('id', $tables_id)->get();

        return view('admin.daftarReservasi', compact('reservations', 'users', 'tables'));
    }

    public function destroy(Request $request)
    {
        $reservation = Reservation::where('id', $request->reservasiid)->delete();
        return redirect('/reservasi_saya')->with('success', 'Data berhasil dihapus');
    }
}
