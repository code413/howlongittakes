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

Route::get('/', 'QuestionsController@index');
/*Route::post('/', 'QuestionsController@store');*/
Route::resource('to', 'QuestionsController', ['only'=> ['show', 'store']]);
Route::post('answers', 'AnswersController@store');

