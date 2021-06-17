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


Route::get('/', 'App\Http\Controllers\TaskController@index')->name('task.index');
Route::get('/task/create', 'App\Http\Controllers\TaskController@create')->name('task.create');
Route::post('/task/store', 'App\Http\Controllers\TaskController@store')->name('task.store');
Route::get('/task/edit/{id}', 'App\Http\Controllers\TaskController@edit')->name('task.edit');
Route::post('/task/update/{id}', 'App\Http\Controllers\TaskController@update')->name('task.update');
Route::delete('/task/delete/{id}', 'App\Http\Controllers\TaskController@delete')->name('task.delete');


Route::get('/learn01', 'App\Http\Controllers\LearnController@index')->name('learn.index');
Route::get('/foreach', 'App\Http\Controllers\LearnController@learnforeach');

Route::get('/lecture01', 'App\Http\Controllers\LectureController@lecture1');


