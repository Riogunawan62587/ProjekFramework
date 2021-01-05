<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;

class ArticleController extends Controller
{
    public function index()
    {
        $data_artikel = Article::all();
        return view('news-and-events', compact('data_artikel'));
    }

    public function articles_list(){
      $articles = Article::all();
      return view('admin.daftarArtikel',compact('articles'));
    }

    public function show_create(){
      return view('admin.tambahArtikel');
    }

    public function add_article(Request $request){

      $this->validate($request, [
        'judul' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'image|required|max:10000',
      ],[
        'judul.required'           => "Judul Artikel tidak boleh kosong!",
        'deskripsi.required'         => "Isi Artikel tidak boleh kosong!",
        'gambar.max'               => "Ukuran file tidak boleh lebih dari 10MB",
        'gambar.required'          => "Silahkan upload file gambar terlebih dahulu!",
        'gambar.image'             => "Tipe file tidak valid. Anda harus mengunggah file berbentuk gambar!",
      ]);

      $article = new Article;
      $article->judul = $request->judul;
      $article->deskripsi = $request->deskripsi;
      $article->tanggal = Carbon::now('Asia/Jakarta');
      if ($request->hasFile('gambar')) {
        $request->file('gambar')->move('assets/img', $request->file('gambar')->getClientOriginalName());
        $article->gambar = $request->file('gambar')->getClientOriginalName();
      }
      $article->save();

      return redirect('/admin/artikel')->with('success','Artikel berhasil dibuat!');
    }

    public function article_detail(Request $request){
      $article = Article::where('id', $request->article_id)->first();

      return view('admin.detailArtikel',compact('article'));
    }

    public function show_edit(Request $request){
      $article = Article::where('id', $request->article_id)->first();

      return view('admin.ubahArtikel',compact('article'));
    }

    public function update_article(Request $request){

      // $this->validate($request, [
      //   'judul' => 'required',
      //   'deskripsi' => 'required',
      //   'gambar' => 'image|max:10000',
      // ],[
      //   'judul.required'           => "Judul Artikel tidak boleh kosong!",
      //   'deskripsi.required'         => "Isi Artikel tidak boleh kosong!",
      //   'gambar.max'               => "Ukuran file tidak boleh lebih dari 10MB",
      //   'gambar.image'             => "Tipe file tidak valid. Anda harus mengunggah file berbentuk gambar!",
      // ]);


      $article = Article::where('id', $request->article_id)->first();

      $article->judul = $request->judul;
      $article->deskripsi = $request->deskripsi;
      if ($request->hasFile('gambar')) {
        $request->file('gambar')->move('assets/img', $request->file('gambar')->getClientOriginalName());
        $article->gambar = $request->file('gambar')->getClientOriginalName();
      }
      $article->update();

      return redirect('/admin/artikel')->with('success','Artikel berhasil diupdate!');
    }

    public function destroy(Request $request)
    {
      $article = Article::where('id', $request->article_id)->delete();

      return redirect('/admin/artikel')->with('success', 'Artikel berhasil dihapus!');
    }
}
