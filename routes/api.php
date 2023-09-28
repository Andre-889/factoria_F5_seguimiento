<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'categories'], function () {
    Route::get('/', 'App\Http\Controllers\CategoryController@index');
    Route::post('/', 'App\Http\Controllers\CategoryController@store');
    Route::get('/{category}', 'App\Http\Controllers\CategoryController@show');
    Route::put('/{category}', 'App\Http\Controllers\CategoryController@update');
    Route::delete('/{category}', 'App\Http\Controllers\CategoryController@destroy');
    });