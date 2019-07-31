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

Route::middleware('auth:admin')->get('/admin', function (Request $request) {
    return $request->user();
});

Route::post('login', 'LoginController@login');

//test only user->marketplace
Route::get('users/all','UserController@index');//testing
Route::post('users/register','UserController@create');


//for expedition
Route::get('expedition/all','AdminController@index');//testing
Route::post('expedition/register','AdminController@create');

//pelanggan
Route::get('pelanggan/all','PelangganController@index');//testing
Route::post('pelanggan/create','PelangganController@create');
//produk
Route::get('produk/all','ProdukController@index');//testing
Route::post('produk/create','ProdukController@create');