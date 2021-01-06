<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Table;
use App\Reservation;
use App\User;

class DashboardController extends Controller
{
  public function show_dashboard()
  {
    $total_foods = Food::all()->count();
    $total_tables = Table::all()->count();
    $total_reservations = Reservation::all()->count();
    $total_users = User::all()->count();

    $reservations = Reservation::orderBy('tanggal', 'desc')->get();
    $users_id = Reservation::all()->pluck('user_id');
    $tables_id = Reservation::all()->pluck('table_id');
    $users = User::whereIn('id', $users_id)->get();
    $tables = Table::whereIn('id', $tables_id)->get();

    // return($tables);

    return view('admin.dashboard', compact('total_foods', 'total_tables', 'total_reservations', 'total_users', 'reservations', 'users', 'tables'));
  }
}
