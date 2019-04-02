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

Route::get('kategori/{id}', function () {
    return "halaman kategori".$id;
});

Auth::routes();

Route::resource('category','kategoriController');
Route::get('/home', 'HomeController@index')->name('dashboard.index');
Route::get('tambahdata','kategoriController@addform');
Route::post('tambahkategori','kategoriController@store');
Route::get('hapusKategori/{id}','kategoriController@destroy');
Route::get('editKategori/{id}','kategoriController@editform');
Route::post('updateKategori/{id}','kategoriController@update');

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard.index');
});

