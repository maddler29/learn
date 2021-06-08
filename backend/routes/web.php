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
    $student = ["田中","井伊","織田"];
    dd($student);
});


Route::get('/learn01', 'App\Http\Controllers\LearnController@index')->name('learn.index');

Route::get('/lecture01', 'App\Http\Controllers\LectureController@lecture1');
