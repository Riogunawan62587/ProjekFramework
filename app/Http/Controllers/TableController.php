<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    //

    public function index_admin(){
      return view('admin.daftarMeja');
    }
}
