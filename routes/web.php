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

Route::get('/', function () {
    return view('index');
})->middleware('auth');

Route::get('/homepage', function () {
    return view('index');
})->middleware('auth')->name('index');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/table', 'StaffController@index')->middleware('auth')->name('table');
Route::get('user_details/{id}' , 'StaffController@show')->middleware('auth')->name('staff.show');
Route::post('user_details/schedules', 'StaffController@search')->middleware('auth')->name('schedules');






















