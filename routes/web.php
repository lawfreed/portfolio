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
    return view('master');
});

Route::get('/admin', 'AdminController@login');
Route::get('/admin/dashboard', 'DashboardController@card')->name('upload.card_file','upload.preview');
Route::post('/admin/dashboard', 'DashboardController@store');