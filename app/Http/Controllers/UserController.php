<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //

    public function users_list(){
      $users = User::all();

      return view('admin.daftarUser',compact('users'));
    }
}
