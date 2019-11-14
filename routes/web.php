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

Route::get('/', 'TaskController@index')->name('tasks.index');

Route::get('/list_task', 'TaskController@index')->name('tasks.index');

Route::get('/new_task', 'TaskController@create')->name('tasks.create');
Route::post('/store_task', 'TaskController@store')->name('tasks.store');

Route::get('/tasks/{task}/edit', 'TaskController@edit')->name('tasks.edit');
Route::post('/tasks/{task}/update', 'TaskController@update')->name('tasks.update');

Route::get('/tasks/{task}/delete', 'TaskController@destroy')->name('tasks.destroy');

Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');
