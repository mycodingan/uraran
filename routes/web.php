<?php

use App\Http\Controllers\absensiKehadiranController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\KeluahanController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\landing_page;
use App\Http\Controllers\informasiController;

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
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('/', [landing_page::class, 'index'])->name('landing_page');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/wargas', [WargaController::class, 'index'])->name('wargas.index');
    Route::get('/wargas/create', [WargaController::class, 'create'])->name('wargas.create');
    Route::post('/wargas/store', [WargaController::class, 'store'])->name('wargas.store');
    Route::get('/wargas/{warga}', [WargaController::class, 'show'])->name('wargas.show');
    Route::get('/wargas/{warga}/edit', [WargaController::class, 'edit'])->name('wargas.edit');
    Route::put('/wargas/{warga}/update', [WargaController::class, 'update'])->name('wargas.update');
    Route::delete('/wargas/{warga}/destroy', [WargaController::class, 'destroy'])->name('wargas.destroy');
    Route::get('/wargas/search', [WargaController::class, 'search'])->name('wargas.search');

    Route::get('/keluahans', [KeluahanController::class, 'index'])->name('keluahans.index');
    Route::get('/keluahans/create', [KeluahanController::class, 'create'])->name('keluahans.create');
    Route::post('/keluahans/store', [KeluahanController::class, 'store'])->name('keluahans.store');
    Route::get('/keluahans/{keluhan}', [KeluahanController::class, 'show'])->name('keluahans.show');
    Route::get('/keluahans/{keluhan}/edit', [KeluahanController::class, 'edit'])->name('keluahans.edit');
    Route::put('/keluahans/{keluhan}/update', [KeluahanController::class, 'update'])->name('keluahans.update');
    Route::delete('/keluahans/{keluhan}/destroy', [KeluahanController::class, 'destroy'])->name('keluahans.destroy');
    Route::get('/keluahans/pdf', [KeluahanController::class, 'generatePDF'])->name('keluahans.pdf');

    Route::get('/iurans', [IuranController::class, 'index'])->name('iurans.index');
    Route::get('/iurans/create', [IuranController::class, 'create'])->name('iurans.create');
    Route::post('/iurans/store', [IuranController::class, 'store'])->name('iurans.store');
    Route::get('/iurans/{iuran}', [IuranController::class, 'show'])->name('iurans.show');
    Route::get('/iurans/{iuran}/edit', [IuranController::class, 'edit'])->name('iurans.edit');
    Route::put('/iurans/{iuran}/update', [IuranController::class, 'update'])->name('iurans.update');
    Route::delete('/iurans/{iuran}/destroy', [IuranController::class, 'destroy'])->name('iurans.destroy');


    Route::get('/absensi', [absensiKehadiranController::class, 'index'])->name('absensi.index');
    Route::get('/absensi/create', [absensiKehadiranController::class, 'create'])->name('absensi.create');
    Route::post('/absensi/store', [absensiKehadiranController::class, 'store'])->name('absensi.store');
    Route::get('/absensi/{absensiKehadiran}', [absensiKehadiranController::class, 'show'])->name('absensi.show');
    Route::get('/absensi/{absensiKehadiran}/edit', [absensiKehadiranController::class, 'edit'])->name('absensi.edit');
    Route::put('/absensi/{absensiKehadiran}/update', [absensiKehadiranController::class, 'update'])->name('absensi.update');
    Route::delete('/absensi/{absensiKehadiran}/destroy', [absensiKehadiranController::class, 'destroy'])->name('absensi.destroy');
    Route::get('/absensi/showByDate', [absensiKehadiranController::class, 'showByDate'])->name('absensi.showByDate');
    Route::get('/absensi/pdf', [absensiKehadiranController::class, 'generatePDF'])->name('absensi.pdf');

    Route::get('/informasis', [informasiController::class, 'index'])->name('informasis.index');
    Route::get('/informasis/create', [informasiController::class, 'create'])->name('informasis.create');
    Route::post('/informasis', [informasiController::class, 'store'])->name('informasis.store');
    Route::get('/informasis/{informasi}', [informasiController::class, 'show'])->name('informasis.show');
    Route::get('/informasis/{informasi}/edit', [informasiController::class, 'edit'])->name('informasis.edit');
    Route::put('/informasis/{informasi}', [informasiController::class, 'update'])->name('informasis.update');
    Route::delete('/informasis/{informasi}', [informasiController::class, 'destroy'])->name('informasis.destroy');
    Route::post('/informasis/showByDate', [informasiController::class, 'showByDate'])->name('informasis.showByDate');
});

require __DIR__ . '/auth.php';
