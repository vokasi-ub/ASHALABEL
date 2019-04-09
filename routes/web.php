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

Route::resource('sub_cat','sub_catController');
Route::get('tambahSub','sub_catController@addform');
Route::post('tambahdataSub','sub_catController@store');
Route::get('hapusSub/{id}','sub_catController@destroy');
Route::get('editSub/{id}','sub_catController@editform');
Route::post('updateSub/{id}','sub_catController@update');

Route::resource('product','produkController');
Route::get('tambahProduk','produkController@addform');
Route::post('tambahdataProduk','produkController@store');
Route::get('hapusProduk/{id}','produkController@destroy');
Route::get('editProduk/{id}','produkController@editform');
Route::post('updateProduk/{id}','produkController@update');

Route::resource('transation','transaksiController');
Route::get('tambahTrans','transaksiController@addform');
Route::post('tambahdataTrans','transaksiController@store');
Route::get('hapusTrans/{id}','transaksiController@destroy');
Route::get('editTrans/{id}','transaksiController@editform');
Route::post('updateTrans/{id}','transaksiController@update');
Route::get('nota/{id}','transaksiController@nota');

Route::resource('reviews','reviewController');
Route::get('tambahReview','reviewController@addform');
Route::post('tambahdataReview','reviewController@store');
Route::get('hapusReview/{id}','reviewController@destroy');
Route::get('editReview/{id}','reviewController@editform');
Route::post('updateReview/{id}','reviewController@update');


Route::get('dashboard', function () {
    return view('dashboard.index');
});

Route::resource('/', 'frontendController');
Route::get('main-detail/{id}','frontendController@detail');

