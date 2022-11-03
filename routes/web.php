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
Route::resource('/','App\Http\Controllers\SectionController');

Route::post('/store','App\Http\Controllers\SectionController@store')->name('store');
Route::post('/store2','App\Http\Controllers\SectionController@store2')->name('store2');

Route::post('/order','App\Http\Controllers\SectionController@updateOrder')->name('order');
Route::post('/order2','App\Http\Controllers\SectionController@updateOrder2')->name('order2');

Route::post('/update','App\Http\Controllers\SectionController@update')->name('update');
Route::post('/destroy','App\Http\Controllers\SectionController@destroy')->name('destroy');
