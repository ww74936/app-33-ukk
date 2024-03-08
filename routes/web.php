<?php

use App\Http\Controllers\bukuController;
use App\Http\Controllers\BukuController as ControllersBukuController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\PeminjamanController as ControllersPeminjamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [bukuController::class , 'landing']);

// Route::get('/dashboard', function () {
//     return view('welcome');
// })->middleware(['auth', 'verified'])->name('welcome');

Route::group(['middleware' => 'role:admin,petugas'], function () {
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

// Route::get('/welcome', function () {
//     return view('welcome');
// })->name('welcome');

// Route::get('/buku', function () {
//     return view('buku.index');
// });

// Route::resource('/buku', \App\Http\Controllers\bukuController::class);

Route::get('/categories', function () {
    return view('index');
});

Route::get('detail/{id}', [ViewController::class, 'detail']);

// Route::get('/kategori', [kategoriController::class, 'index']);
// Route::get('/kategori/create', [kategoriController::class, 'create']);
// Route::get('/kategori/create/{id_kategori}', [kategoriController::class, 'create']);
// Route::resource('/kategori', kategoriController::class);




// Route::get('/detail-buku', function () {
//     return view('detail');
// });

// Route::get('/create', function () {
//     return view('buku.create');
// });

Route::resource('/buku', BukuController::class);
Route::resource('kategori', kategoriController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::get('/cetak', [peminjamanController::class, 'cetak']);
Route::resource('/user', UserController::class);
// Route::get('/buku/edit/{id}', [bukuController::class, 'edit'])->name('buku.edit');
// Route::get('/buku/update/{id}', [bukuController::class, 'update'])->name('buku.update');


// Route::get('/show', function () {
//     return view('buku.show');
// });

// Route::get('/buku', function () {
//     return view('buku.destroy');
// });

// Route::resource('/buku', bukuController::class);

// Route::post('/buku', [bukuController::class, 'store']);

require __DIR__ . '/auth.php';