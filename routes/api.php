<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos', '\App\Http\Controllers\ProductoRestController@index');
Route::post('/productos', '\App\Http\Controllers\ProductoRestController@store');
Route::put('/productos/{producto}', '\App\Http\Controllers\ProductoRestController@update');
Route::delete('/productos/{producto}', '\App\Http\Controllers\ProductoRestController@destroy');

Route::get('/categorias', '\App\Http\Controllers\CategoriaRestController@index');
Route::post('/categorias', '\App\Http\Controllers\CategoriaRestController@store');
Route::put('/categorias/{categoria}', '\App\Http\Controllers\CategoriaRestController@update');
Route::delete('/categorias/{categoria}', '\App\Http\Controllers\CategoriaRestController@destroy');