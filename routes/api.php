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

Route::group(['prefix' => 'stacks'], function () {
    Route::get('/', 'App\Http\Controllers\StackController@index');
    Route::post('/', 'App\Http\Controllers\StackController@store');
    Route::get('/{stack}', 'App\Http\Controllers\StackController@show');
    Route::put('/{stack}', 'App\Http\Controllers\StackController@update');
    Route::delete('/{stack}', 'App\Http\Controllers\StackController@destroy');
    });

Route::group(['prefix' => 'person_stack'], function () {
    Route::get('/', 'App\Http\Controllers\PersonStackController@index');
    Route::post('/', 'App\Http\Controllers\PersonStackController@store');
    Route::get('/{person_stack}', 'App\Http\Controllers\PersonStackController@show');
    Route::put('/{person_stack}', 'App\Http\Controllers\PersonStackController@update');
    Route::delete('/{person_stack}', 'App\Http\Controllers\PersonStackController@destroy');
    });