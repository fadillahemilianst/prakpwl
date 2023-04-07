<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaControllerr;
use App\Http\Controllers\admincontroller;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/daftar_mahasiswa','App\Http\Controllers\MahasiswaControllerr@index');

// Route::get('/daftar_mahasiswa', [MahasiswaControllerr::class,'index']);

// // Route::post('/detail_mahasiswa', [MahasiswaControllerr::class, 'detail_mhs']);

// //Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaControllerr::class, 'detail_mhs']);
 
// Route::view('/detail_mahasiswa', 'detail_mahasiswa');

Route::get('/admin/dasboard', [admincontroller::class, 'index']);

Route::get('/admin/postingan', [admincontroller::class, 'show_postingan']);

Route::get('/admin/arsip', [admincontroller::class, 'show_arsip']);

Route::get('/admin/analytics', [admincontroller::class, 'show_analytics']);

Route::get('/admin/contactperson', [admincontroller::class, 'show_contactperson']);

Route::get('/admin/notification', [admincontroller::class, 'show_notification']);

Route::get('/admin/about', [admincontroller::class, 'show_about']);