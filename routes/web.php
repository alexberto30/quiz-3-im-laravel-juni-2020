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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function(){
	return view('index');
});

Route::get('/artikel', 'artikelController@index'); // menampilkan semua
Route::get('/artikel/create', 'artikelController@create'); // menampilkan halaman form
Route::post('/artikel', 'artikelController@store'); // menyimpan data

Route::get('/artikel/{id}', 'artikelController@show'); // menampilkan detail item dengan id 
Route::get('/artikel/{id}/edit', 'artikelController@edit'); // menampilkan form untuk edit item
Route::put('/artikel/{id}', 'artikelController@update'); // menyimpan perubahan dari form edit
Route::delete('/artikel/{id}', 'artikelController@destroy'); // menghapus data dengan id