<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendanceController;

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

Route::get('', function () {
    return view('welcome');
});


Route::get('/', 'App\Http\Controllers\StudentController@index')->name('dashboard');
Route::get('/create', 'App\Http\Controllers\StudentController@create' )->name('dashboard.create');
Route::get('/edit/{id}', 'App\Http\Controllers\StudentController@edit')->name('dashboard.edit');
Route::get('/show/{id}', 'App\Http\Controllers\StudentController@show' )->name('dashboard.show');
Route::post('/store', 'App\Http\Controllers\StudentController@store' )->name('store');
Route::post('/update/{id}', 'App\Http\Controllers\StudentController@update');
Route::post('/delete/{id}', 'App\Http\Controllers\StudentController@destroy');
Route::get('studentslist', 'App\Http\Controllers\StudentController@lists')->name('dashboard.studentslist');
Route::get('att', 'App\Http\Controllers\StudentController@allStudents')->name('dashboard.att');
Route::get('/search', 'App\Http\Controllers\StudentController@search')->name('search');

//Attendance controller

Route::get('/markatt/{id}', 'App\Http\Controllers\AttendanceController@edit')->name('dashboard.markatt');
Route::post('/store', 'App\Http\Controllers\AttendanceController@store')->name('store');
Route::get('/markatt', 'App\Http\Controllers\AttendanceController@create' )->name('markatt');
Route::get('/atthistory/{id}', 'App\Http\Controllers\AttendanceController@show' )->name('atthistory');


