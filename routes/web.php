<?php

use App\Http\Controllers\bukuController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware'=>'role:admin,petugas'], function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/admin', function () {
    return view('admin.admin_home');
});

Route::get('/welcome', function(){
    return view ('welcome');
})->name('welcome');

Route::get('/buku', function () {
    return view('buku.index');
});

// Route::resource('/buku', \App\Http\Controllers\bukuController::class);

Route::get('/kategori', function () {
    return view('index');
});

Route::get('/detail-buku', function () {
    return view('detail');
});

Route::get('/create', function() {
    return view('buku.create');
});

Route::get('/buku', function() {
    return view('buku.show');
});

Route::resource('/buku', bukuController::class);

Route::post('/buku', [bukuController::class, 'store']);

require __DIR__.'/auth.php';
