<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// API Untuk Tampil Data
Route::get('/mahasiswa/read','MhsAPIController@read');

// API Untuk Tambah Data
Route::post('/mahasiswa/create','MhsAPIController@create');

// API Untuk Mengubah Data
Route::post('/mahasiswa/update/{id}','MhsAPIController@update');

// API untuk Delete Data
Route::delete('/mahasiswa/delete/{id}','MhsAPIController@delete');