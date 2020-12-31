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

// Controller Home
Route::get('/home', 'HomeController@index')->name('home.index');


// Controller Daftar Menu
Route::get('/menu', 'MenuController@index')->name('menu.index');


// Controller Reservasi & My Reservation
Route::get('/reservasi', 'ReservationController@index')->name('reservasi.index');
Route::post('/reservasi', 'ReservationController@simpan_reservasi')->name('reservasi.simpan');
Route::get('/reservasi_saya', 'ReservationController@my_reservation')->name('reservasi.my_reservation');


// Controller Artikel
Route::get('/artikel', 'ArticleController@index')->name('artikel.index');
