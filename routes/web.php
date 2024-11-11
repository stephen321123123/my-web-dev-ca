<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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
});

// Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
// Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
// Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');
Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::put('/cars/{car}', [CarController::class, 'update'])->name('cars.update');
// Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
// Route::delete('/cars', [CarController::class, 'destroy'])->name('cars.destroy');

Route::resource('cars', CarController::class)->only(['index', 'create', 'store', 'destroy', 'show']);


require __DIR__.'/auth.php';

