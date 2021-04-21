<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers;

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
Route::resource('/productos', 'App\HTTP\Controllers\ProductosController');
Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/inicio', 'App\HTTP\Controllers\ProductosController@index');
Route::get('/crear', 'App\HTTP\Controllers\ProductosController@create');*/
