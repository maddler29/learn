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

// task-route
Route::get('/', 'App\Http\Controllers\TaskController@index')->name('task.index');
Route::get('/task/create', 'App\Http\Controllers\TaskController@create')->name('task.create');
Route::post('/task/store', 'App\Http\Controllers\TaskController@store')->name('task.store');
Route::get('/task/edit/{id}', 'App\Http\Controllers\TaskController@edit')->name('task.edit');
Route::post('/task/update/{id}', 'App\Http\Controllers\TaskController@update')->name('task.update');
Route::delete('/task/delete/{id}', 'App\Http\Controllers\TaskController@delete')->name('task.delete');

// category-route
Route::get('/category/create','App\Http\Controllers\CategoryController@create')->name('category.create');
Route::post('/category/store','App\Http\Controllers\CategoryController@store')->name('category.store');
Route::get('/category/edit/{id}','App\Http\Controllers\CategoryController@edit')->name('category.edit');
Route::post('/category/update/{id}','App\Http\Controllers\CategoryController@update')->name('category.update');
Route::delete('/category/delete/{id}','App\Http\Controllers\CategoryController@delete')->name('category.delete');


Route::get('/learn01', 'App\Http\Controllers\LearnController@index')->name('learn.index');
Route::get('/foreach', 'App\Http\Controllers\LearnController@learnforeach');

Route::get('/lecture01', 'App\Http\Controllers\LectureController@lecture1');


