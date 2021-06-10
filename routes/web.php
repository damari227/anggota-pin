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

Route::get('/','pageController@loginPage');
// route login
Route::post('/','pageController@login');
Route::get('/logout','pageController@logout');

// route register
Route::get('/register','pageController@register');
Route::post('/register','dataController@store');

Route::get('/register/status','pageController@register_status');

// route admin
Route::get('/admin','dataController@index');
Route::get('/admin/detail/{id}','dataController@show');
Route::get('/admin/anggota','pageController@admin_anggota');

Route::get('/admin/logout','pageController@logout_admin');


// Route anggota
Route::get('/beranda','pageController@beranda');