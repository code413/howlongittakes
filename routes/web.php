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

Route::post('/submit', 'QuestionsController@store');

Route::resource('answers', 'AnswersController', ['only'=> ['store', 'update']]);

Route::view('/terms','terms.index');

Auth::routes();

Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::resource('feeds', 'FeedsController', ['only'=>['create', 'store']])->middleware('auth');

Route::get('/{question}', 'QuestionsController@show');
