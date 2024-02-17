<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.admin_home');
});
Route::get('/buku', function () {
    return view('buku.index');
});

Route::get('/kategori', function () {
    return view('index');
});

Route::get('/detail-buku', function () {
    return view('detail');
});
