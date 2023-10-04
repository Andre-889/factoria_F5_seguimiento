<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PersonStackController;

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

Route::group(['prefix' => 'personStack'], function () {
    Route::get('/', 'App\Http\Controllers\PersonStackController@index');
    Route::post('/', 'App\Http\Controllers\PersonStackController@store');
    Route::get('/{personStack}', 'App\Http\Controllers\PersonStackController@show');
    Route::put('/{personStack}', 'App\Http\Controllers\PersonStackController@update');
    Route::delete('/{personStack}', 'App\Http\Controllers\PersonStackController@destroy');
    });

Route::group(['prefix' => 'personalInformation'], function () {
    Route::get('/', 'App\Http\Controllers\PersonalInformationController@index');
    Route::post('/', 'App\Http\Controllers\PersonalInformationController@store');
    Route::get('/{personalInformation}', 'App\Http\Controllers\PersonalInformationController@show');
    Route::put('/{personalInformation}', 'App\Http\Controllers\PersonalInformationController@update');
    Route::delete('/{personalInformation}', 'App\Http\Controllers\PersonalInformationController@destroy');
    });

Route::group(['prefix' => 'projectsWorkshop'], function () {
    Route::get('/', 'App\Http\Controllers\ProjectsWorkshopController@index');
    Route::post('/', 'App\Http\Controllers\ProjectsWorkshopController@store');
    Route::get('/{projectsWorkshop}', 'App\Http\Controllers\ProjectsWorkshopController@show');
    Route::put('/{projectsWorkshop}', 'App\Http\Controllers\ProjectsWorkshopController@update');
    Route::delete('/{projectsWorkshop}', 'App\Http\Controllers\ProjectsWorkshopController@destroy');
    });


Route::group(['prefix' => 'skills'], function () {
    Route::get('/', 'App\Http\Controllers\SkillController@index');
    Route::post('/', 'App\Http\Controllers\SkillController@store');
    Route::get('/{skill}', 'App\Http\Controllers\SkillController@show');
    Route::put('/{skill}', 'App\Http\Controllers\SkillController@update');
    Route::delete('/{skill}', 'App\Http\Controllers\SkillController@destroy');});


Route::group(['prefix' => 'coder_feedbacks'], function () {
    Route::get('/', 'App\Http\Controllers\CoderFeedbackController@index');
    Route::post('/', 'App\Http\Controllers\CoderFeedbackController@store');
    Route::get('/{coder_feedback}', 'App\Http\Controllers\CoderFeedbackController@show');
    Route::put('/{coder_feedback}', 'App\Http\Controllers\CoderFeedbackController@update');
    Route::delete('/{coder_feedback}', 'App\Http\Controllers\CoderFeedbackController@destroy');
});
Route::group(['prefix' => 'professional_informations'], function () {
    Route::get('/', 'App\Http\Controllers\ProfessionalInformationController@index');
    Route::post('/', 'App\Http\Controllers\ProfessionalInformationController@store');
    Route::get('/{professional_information}', 'App\Http\Controllers\ProfessionalInformationController@show');
    Route::put('/{professional_information}', 'App\Http\Controllers\ProfessionalInformationController@update');
    Route::delete('/{professional_information}', 'App\Http\Controllers\ProfessionalInformationController@destroy');
});

Route::group(['prefix' => 'personSkills'], function () {
    Route::get('/', 'App\Http\Controllers\PersonSkillController@index');
    Route::post('/', 'App\Http\Controllers\PersonSkillController@store');
    Route::get('/{personSkill}', 'App\Http\Controllers\PersonSkillController@show');
    Route::put('/{personSkill}', 'App\Http\Controllers\PersonSkillController@update');
    Route::delete('/{personSkill}', 'App\Http\Controllers\PersonSkillController@destroy');
});
