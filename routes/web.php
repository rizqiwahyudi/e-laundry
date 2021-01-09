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

Route::get('/dashboard/absensi', function () {
    return view('adminDashboard.v_absensi');
});

Route::get('/dashboard', function () {
    return view('adminDashboard.v_index');
});
Route::get('/', 'PagesController@home');
Route::get('/login', 'PagesController@login');
Route::get('/', 'CommentController@index');
Route::post('/', 'CommentController@store');
