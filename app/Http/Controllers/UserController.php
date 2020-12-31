<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index_admin(){
      return view('admin.daftarUser');
    }
}
