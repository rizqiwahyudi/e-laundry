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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/setup', function () {
    return view('v_setup');
});

Route::get('/dashboard', function () {
    return view('adminDashboard.v_index');
});

Route::get('/dashboard/karyawan', function () {
    return view('adminDashboard.karyawan.v_karyawan');
});
Route::get('/dashboard/karyawan/create', function () {
    return view('adminDashboard.karyawan.v_tambah');
});

Route::get('/', 'PagesController@home');
Route::get('/login', 'PagesController@login');
Route::get('/', 'CommentController@index');
Route::post('/', 'CommentController@store');

Route::get('/dashboard/absensi', function () {
    return view('adminDashboard.v_absensi');
});
Route::get('/dashboard/konsumen', function () {
    return view('adminDashboard.konsumen.v_konsumen');
});
Route::get('/dashboard/konsumen/create', function () {
    return view('adminDashboard.konsumen.v_tambah');
});
Route::get('/dashboard/transaksi', function () {
    return view('adminDashboard.transaksi.v_transaksi');
});
Route::get('/dashboard/transaksi/create', function () {
    return view('adminDashboard.transaksi.v_tambah');
});
Route::get('/dashboard/transaksi/laporan', function () {
    return view('adminDashboard.transaksi.v_laporan');
});
Route::get('/dashboard/riwayat-transaksi', function () {
    return view('adminDashboard.v_riwayatTransaksi');
});
Route::get('/dashboard/pengeluaran', function () {
    return view('adminDashboard.pengeluaran.v_pengeluaran');
});
Route::get('/dashboard/pengeluaran/create', function () {
    return view('adminDashboard.pengeluaran.v_tambah');
});
Route::get('/dashboard/pengeluaran/laporan', function () {
    return view('adminDashboard.pengeluaran.v_laporan');
});
Route::get('/dashboard/master', function () {
    return view('adminDashboard.master.v_master');
});
Route::get('/dashboard/master/create', function () {
    return view('adminDashboard.master.v_tambah');
});
