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

Route::get('/', 'LandingController@index')->name('landing.index');

Route::group(['middleware' => ['auth', 'CheckRole:Pengguna']], function () {

  // Controller Home
  Route::get('/home', 'HomeController@index')->name('home.index');

  // Controller Daftar Menu
  Route::get('/menu', 'MenuController@index')->name('menu.index');

  // Controller Reservasi & My Reservation
  Route::get('/reservasi', 'ReservationController@index')->name('reservasi.index');
  Route::post('/reservasi', 'ReservationController@simpan_reservasi')->name('reservasi.simpan');
  Route::get('/reservasi_saya', 'ReservationController@my_reservation')->name('reservasi.my_reservation');
  Route::post('/reservasi_saya', 'ReservationController@simpan_bukti_pembayaran')->name('reservasi.my_reservation.simpan');
  Route::post('/reservasi_saya/delete', 'ReservationController@destroy')->name('reservasi.my_reservation.delete');


  // Controller Artikel
  Route::get('/artikel', 'ArticleController@index')->name('artikel.index');
});

Route::group(['middleware' => ['auth', 'CheckRole:Admin']], function () {

  // Controller Dashboard
  Route::get('/admin/dashboard', 'DashboardController@show_dashboard') ->name('admin-dashboard');

  // Controller Menu
  Route::get('/admin/menu', 'MenuController@index_admin')->name('menu_list');
  Route::post('/admin/menu', 'MenuController@store') ->name('menu_create');
  Route::post('/admin/menu/delete', 'MenuController@destroy')->name('menu_delete');
  Route::post('admin/menu/edit', 'MenuController@edit')->name('menu_edit');
  Route::post('admin/menu/update', 'MenuController@update')->name('menu_update');

  //  Controller Table
  Route::get('/admin/meja', 'TableController@index_admin') ->name('meja_list');
  Route::post('/admin/meja', 'TableController@create') ->name('meja_create');
  Route::post('/admin/meja/delete', 'TableController@destroy') ->name('meja_delete');
  Route::post('admin/meja/update', 'TableController@update') ->name('meja_update');

  // Controller User
  Route::get('/admin/pengguna', 'UserController@users_list') ->name('pengguna_list');
  Route::post('/admin/pengguna/detail', 'UserController@user_detail')->name('pengguna_detail');
  Route::post('/admin/pengguna/hapus', 'UserController@destroy') ->name('pengguna_delete');

  // Controller Reservasi
  Route::get('/admin/reservasi', 'ReservationController@reservations_list')->name('reservasi_list');
  Route::post('/admin/reservasi/detail', 'ReservationController@reservation_detail') ->name('reservasi_detail');
  Route::post('/admin/reservasi', 'ReservationController@reservation_change_status') ->name('reservasi_update');
  Route::post('/admin/reservasi/hapus', 'ReservationController@destroy_reservation_admin') ->name('reservasi_delete');

  // Controller Artikel
  Route::get('/admin/artikel', 'ArticleController@articles_list')->name('artikel_list');
  Route::get('/admin/artikel/tambah', 'ArticleController@show_create') ->name('artikel_show_create');
  Route::post('/admin/artikel/tambah', 'ArticleController@add_article')->name('artikel_create');
  Route::post('/admin/artikel/detail', 'ArticleController@article_detail') ->name('artikel_detail');
  Route::post('/admin/artikel/edit', 'ArticleController@show_edit')->name('artikel_edit');
  Route::post('/admin/artikel/update', 'ArticleController@update_article') ->name('artikel_update');
  Route::post('/admin/artikel/delete', 'ArticleController@destroy')->name('artikel_delete');
});
