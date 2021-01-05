<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //

    public function users_list(){
      $users = User::where('role','pengguna')->get();

      return view('admin.daftarUser',compact('users'));
    }

    public function user_detail(Request $request){
      $user = User::where('id',$request->user_id)->first();

      return view('admin.detailUser',compact('user'));
    }

    public function destroy(Request $request){
      $user = User::where('id',$request->user_id)->delete();

      return redirect('/admin/pengguna')->with('success','Data berhasil dihapus!');
    }

}
