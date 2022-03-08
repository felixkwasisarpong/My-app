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
    return view('register');
});

Route::get('login','AuthController@login')->name('login');
Route::get('register','AuthController@register')->name('register');
Route::post('signin','Auth\LoginController@login')->name('loginroute');
Route::post('signup','Auth\Register@register')->name('registerroute');