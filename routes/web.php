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
    return redirect()->route('halaman_utama');
});


Route::get('/home',        'DashboardController@index')->name('halaman_utama');
// Route::get('/testing',        'DashboardController@testingAPI');
