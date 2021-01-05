<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;

class TableController extends Controller
{
    //

    public function index_admin(){
      $tables = Table::all();
      return view('admin.daftarMeja', compact('tables'));
    }

    public function create(Request $request){

      $this->validate($request, [
        'nama'                    => 'required',
      ],[
        'nama.required'           => "Nomor meja tidak boleh kosong!",
      ]);

      $table = new Table;
      $table->nama = $request->nama;
      $table->save();

      return redirect('/admin/meja')->with('success','Data meja berhasil ditambahkan!');
    }

    public function destroy(Request $request){
      $table = Table::where('id',$request->tableid)->delete();

      return redirect('/admin/meja')->with('success','Data berhasil dihapus');
    }

    public function update(Request $request){
      $table = Table::where('id',$request->id)->first();

      $table->nama = $request->nama_edit;
      $table->update();

      return redirect('/admin/meja')->with('success','Data meja berhasil diupdate!');
    }
}
