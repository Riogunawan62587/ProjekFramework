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
Route::get('/reservasi_saya', 'ReservationController@my_reservation')->name('reservasi.my_reservation');


// Controller Artikel
Route::get('/artikel', 'ArticleController@index')->name('artikel.index');

Route::get('/admin/dashboard','DashboardController@show_dashboard');

Route::get('/admin/menu','MenuController@index_admin');
Route::post('/admin/menu','MenuController@create');
Route::post('/admin/menu/delete','MenuController@destroy');
Route::post('admin/menu/edit','MenuController@edit');
Route::post('admin/menu/update','MenuController@update');

Route::get('/admin/meja', 'TableController@index_admin');
Route::post('/admin/meja','TableController@create');
Route::post('/admin/meja/delete','TableController@destroy');
Route::post('admin/meja/update','TableController@update');

Route::get('/admin/pengguna', 'UserController@users_list');

Route::get('/admin/reservasi','ReservationController@reservations_list');
