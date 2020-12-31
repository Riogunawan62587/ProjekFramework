<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class MenuController extends Controller
{
    public function index()
    {
        $daftar_menu1 = Food::where('tipe', 'mains')->get();
        $daftar_menu2 = Food::where('tipe', 'lunch')->get();
        $daftar_menu3 = Food::where('tipe', 'dinner')->get();
        $daftar_menu4 = Food::where('tipe', 'drinks')->get();


        $daftar_menu = Food::all()->take(10);

        return view('menu', compact('daftar_menu1', 'daftar_menu2', 'daftar_menu4', 'daftar_menu3', 'daftar_menu'));
    }
}
