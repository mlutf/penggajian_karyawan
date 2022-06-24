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
    return view('layout/main');
});

Route::resource('karyawan','KaryawanController');
Route::resource('jabatan','JabatanController');
Route::resource('divisi','DivisiController');
Route::resource('absen','AbsenController');
Route::resource('rekap','RekapController');