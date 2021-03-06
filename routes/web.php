<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
// Private
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/questionnaire/create', 'QuestionnaireController@create')->name('questionnaires.create');
Route::post('/questionnaire', 'QuestionnaireController@store')->name('questionnaires.store');


Route::get('/questionnaire/{questionnaire}', 'QuestionnaireController@show')->name('questionnaires.show');


Route::get('/questionnaire/{questionnaire}/question/create', 'QuestionController@create')->name('questions.create');
Route::post('/questionnaire/{questionnaire}/question', 'QuestionController@store')->name('questions.store');
Route::delete('/questionnaire/{questionnaire}/question/{question}', 'QuestionController@destroy')->name('questions.destroy');

// Public 
Route::get('/surveys/{questionnaire}-{slug}', 'SurveyController@show')->name('surveys.show');
Route::post('/surveys/{questionnaire}-{slug}', 'SurveyController@store')->name('surveys.store');
