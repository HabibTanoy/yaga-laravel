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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/slider', [App\Http\Controllers\HomeController::class, 'slider'])->name('slider-view');
Route::post('/slider',  [App\Http\Controllers\HomeController::class, 'sliderUpload'])->name('slider-upload');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'fronted'])->name('home');
