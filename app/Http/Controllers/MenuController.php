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

  public function index_admin()
  {
    $foods = Food::all();

    return view('admin.daftarMenu', compact('foods'));
  }

  public function store(Request $request)
  {
    $food = new Food;
    $food->nama = $request->nama;
    $food->tipe = $request->kategori;
    $food->deskripsi = $request->deskripsi;
    $food->harga = $request->harga;
    if ($request->hasFile('gambar')) {
      $request->file('gambar')->move('assets/img', $request->file('gambar')->getClientOriginalName());
    }
    $food->gambar = $request->file('gambar')->getClientOriginalName();
    $food->save();

    return redirect('/admin/menu')->with('success', 'Data menu berhasil ditambahkan!');
  }

  public function destroy(Request $request)
  {
    $food = Food::where('id', $request->menuid)->delete();

    return redirect('/admin/menu')->with('success', 'Data menu berhasil dihapus');
  }

  public function edit(Request $request)
  {
    $food = Food::where('id', $request->menuid)->first();
    return view('admin.editMenu', compact('food'));
  }

  public function update(Request $request)
  {
    $food = Food::where('id', $request->menuid)->first();

    $food->nama = $request->nama;
    $food->tipe = $request->kategori;
    $food->deskripsi = $request->deskripsi;
    $food->harga = $request->harga;
    if ($request->hasFile('gambar')) {
      $request->file('gambar')->move('assets/img', $request->file('gambar')->getClientOriginalName());
      $food->gambar = $request->file('gambar')->getClientOriginalName();
    }
    $food->update();

    return redirect('/admin/menu')->with('success', 'Data menu berhasil diupdate!');
  }
}
