<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class MenuController extends Controller
{
    public function index()
    {
        $daftar_menu = Food::all();
        return view('menu', compact('daftar_menu'));
    }
}
