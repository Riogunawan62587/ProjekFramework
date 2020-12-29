<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', function () {
  return view('index');
});

// Controller Home & Tentang Kami
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/tentang_kami', 'HomeController@tentang_kami')->name('home.tentang_kami');


// Controller Daftar Menu
Route::get('/menu', 'MenuController@index')->name('menu.index');


// Controller Reservasi
Route::get('/reservasi', 'ReservationController@index')->name('reservasi.index');


// Controller Artikel
Route::get('/artikel', 'ArticleController@index')->name('artikel.index');
