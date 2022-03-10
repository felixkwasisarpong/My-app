<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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
    return redirect()->route('login');
});

Route::group(['middleware' => ['guest']], function() {
    Route::get('login',[LoginController::class, 'showLoginView'])->name('login');
    Route::post('login',[LoginController::class, 'login'])->name('loginroute');

    Route::get('register',[RegisterController::class, 'showRegisterView'])->name('register');
    Route::post('register',[RegisterController::class, 'register'])->name('registerroute');
});



Route::group(['middleware' => ['auth']], function() {

    Route::get('home', [HomeController::class, 'index'])->name('home');

    Route::post('logout', [HomeController::class, 'logout'])->name('logout');

});

