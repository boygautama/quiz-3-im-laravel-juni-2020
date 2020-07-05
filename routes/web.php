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
    // return view('welcome');
    return view('index');
});

Route::get('/artikel/create', 'ArtikelController@tambah'); // menampilkan halaman form
Route::post('/artikel', 'ArtikelController@insert'); // menyimpan data
Route::get('/artikel', 'ArtikelController@index'); // menampilkan semua
Route::get('/artikel/{id}', 'ArtikelController@detail'); // menampilkan detail item dengan id 
Route::get('/artikel/{id}/edit', 'ArtikelController@edit'); // menampilkan form untuk edit item
Route::post('/artikel/{id}', 'ArtikelController@update'); // menyimpan perubahan dari form edit
Route::delete('/artikel/{id}', 'ArtikelController@destroy'); // menghapus data dengan id