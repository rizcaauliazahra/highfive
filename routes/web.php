<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\RiwayatmonitoringController;
use App\Http\Controllers\PanduanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   // Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');

});
Route::get('/riwayat', function () {
    return view('riwayat');
})->middleware(['auth', 'verified'])->name('riwayat');

Route::get('/riwayat-monitoring', [RiwayatmonitoringController::class, 'index'])->name('monitoring.index');

Route::get('/panduan', [PanduanController::class, 'index'])->name('panduan');
// Route::get('/panduan', function () {
//     return view('panduan');
// });


require __DIR__.'/auth.php';
