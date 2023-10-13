<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EvaluationStackController;
use App\Http\Controllers\EvaluationController;


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
    Route::get('/', 'App\Http\Controllers\CategoryController@index')->name('categories.index');
    Route::post('/', 'App\Http\Controllers\CategoryController@store')->name('categories.store');
    Route::get('/{category}', 'App\Http\Controllers\CategoryController@show')->name('categories.show');
    Route::put('/{category}', 'App\Http\Controllers\CategoryController@update')->name('categories.update');
    Route::delete('/{category}', 'App\Http\Controllers\CategoryController@destroy')->name('categories.destroy');
});

Route::group(['prefix' => 'stacks'], function () {
    Route::get('/', 'App\Http\Controllers\StackController@index')->name('stacks.index');
    Route::post('/', 'App\Http\Controllers\StackController@store')->name('stacks.store');
    Route::get('/{stack}', 'App\Http\Controllers\StackController@show')->name('stacks.show');
    Route::put('/{stack}', 'App\Http\Controllers\StackController@update')->name('stacks.update');
    Route::delete('/{stack}', 'App\Http\Controllers\StackController@destroy')->name('stacks.destroy');
});

Route::group(['prefix' => 'evaluations'], function () {
    Route::get('/', 'App\Http\Controllers\EvaluationController@index');
    Route::post('/', 'App\Http\Controllers\EvaluationController@store');
    Route::get('/{evaluation}', 'App\Http\Controllers\EvaluationController@show');
    Route::put('/{evaluation}', 'App\Http\Controllers\EvaluationController@update');
    Route::delete('/{evaluation}', 'App\Http\Controllers\EvaluationController@destroy');
    });
    

Route::group(['prefix' => 'evaluationStack'], function () {
    Route::get('/', 'App\Http\Controllers\EvaluationStackController@index');
    Route::post('/', 'App\Http\Controllers\EvaluationStackController@store');
    Route::get('/{evaluationStack}', 'App\Http\Controllers\EvaluationStackController@show');
    Route::put('/{evaluationStack}', 'App\Http\Controllers\EvaluationStackController@update');
    Route::delete('/{evaluationStack}', 'App\Http\Controllers\EvaluationStackController@destroy');
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
    Route::get('/', 'App\Http\Controllers\SkillController@index')->name('skills.index');
    Route::post('/', 'App\Http\Controllers\SkillController@store')->name('skills.store');
    Route::get('/{skill}', 'App\Http\Controllers\SkillController@show')->name('skills.show');
    Route::put('/{skill}', 'App\Http\Controllers\SkillController@update')->name('skills.update');
    Route::delete('/{skill}', 'App\Http\Controllers\SkillController@destroy')->name('skills.destroy');;  
    });


Route::group(['prefix' => 'coderFeedbacks'], function () {
    Route::get('/', 'App\Http\Controllers\CoderFeedbackController@index');
    Route::post('/', 'App\Http\Controllers\CoderFeedbackController@store');
    Route::get('/{coderFeedback}', 'App\Http\Controllers\CoderFeedbackController@show');
    Route::put('/{coderFeedback}', 'App\Http\Controllers\CoderFeedbackController@update');
    Route::delete('/{coderFeedback}', 'App\Http\Controllers\CoderFeedbackController@destroy');
});
Route::group(['prefix' => 'professionalInformations'], function () {
    Route::get('/', 'App\Http\Controllers\ProfessionalInformationController@index');
    Route::post('/', 'App\Http\Controllers\ProfessionalInformationController@store');
    Route::get('/{professionalInformation}', 'App\Http\Controllers\ProfessionalInformationController@show');
    Route::put('/{professionalInformation}', 'App\Http\Controllers\ProfessionalInformationController@update');
    Route::delete('/{professionalInformation}', 'App\Http\Controllers\ProfessionalInformationController@destroy');
});

Route::group(['prefix' => 'personSkills'], function () {
    Route::get('/', 'App\Http\Controllers\PersonSkillController@index');
    Route::post('/', 'App\Http\Controllers\PersonSkillController@store');
    Route::get('/{personSkill}', 'App\Http\Controllers\PersonSkillController@show');
    Route::put('/{personSkill}', 'App\Http\Controllers\PersonSkillController@update');
    Route::delete('/{personSkill}', 'App\Http\Controllers\PersonSkillController@destroy');
});
Route::group(['prefix' => 'bootcampStacks'], function () {
    Route::get('/', 'App\Http\Controllers\BootcampStackController@index')->name('bootcampStacks.index');
    Route::post('/', 'App\Http\Controllers\BootcampStackController@store')->name('bootcampStacks.store');
    Route::get('/{bootcampStack}', 'App\Http\Controllers\BootcampStackController@show')->name('bootcampStacks.show');
    Route::put('/{bootcampStack}', 'App\Http\Controllers\BootcampStackController@update')->name('bootcampStacks.update');
    Route::delete('/{bootcampStack}', 'App\Http\Controllers\BootcampStackController@destroy')->name('bootcampStacks.destroy');
});


