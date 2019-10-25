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


Route::get('/', 'PageController@welcome')->name('welcome');
Route::get('/about', 'PageController@about')->name('about');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::get('/secretary/home', 'Secretary\HomeController@index')->name('secretary.home');
Route::get('/user/home', 'User\HomeController@index')->name('user.home');

Route::get('/admin/questions', 'Admin\QuestionController@index')->name('admin.questions.index');
Route::get('/admin/questions/create', 'Admin\QuestionController@create')->name('admin.questions.create');
Route::get('/admin/questions/{id}', 'Admin\QuestionController@show')->name('admin.questions.show');
Route::post('/admin/questions/store', 'Admin\QuestionController@store')->name('admin.questions.store');
Route::get('/admin/questions{id}/edit', 'Admin\QuestionController@edit')->name('admin.questions.edit');
Route::put('/admin/questions/{id}', 'Admin\QuestionController@update')->name('admin.questions.update');
Route::delete('/admin/questions/{id}', 'Admin\QuestionController@destroy')->name('admin.questions.destroy');

Route::get('/user/questions', 'User\QuestionController@index')->name('user.questions.index');
Route::get('/user/questions/{id}', 'User\QuestionController@index')->name('user.questions.show');
