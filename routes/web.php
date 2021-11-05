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



/*Route::get('/home', function () {
    return view('index');
});*/

Route::get('bnpb',function(){
	return view('indexBNPB');
});



Auth::routes();
// Route::get('/3', 'pemetaancontroller@index');
//Route::get('peta', 'pemetaancontroller@index');
Route::get('peta', 'pemetaancontroller@tampil');
Route::post('peta', 'pemetaancontroller@tampil');
//Route::resource('peta', 'pemetaancontroller');
 Route::resource('/home', 'pelaporController');
 Route::resource('verif', 'verifikasicontroller');
 Route::resource('laporan', 'laporanController');

Route::post('select-ajax', ['as'=>'select-ajax','uses'=>'pelaporController@selectAjax']);






