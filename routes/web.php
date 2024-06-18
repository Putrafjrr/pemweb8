<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\KaryawanController;

Route::middleware(['auth'])->group(function () {
    Route::get('/employees', [KaryawanController::class, 'index'])->name('employees.index');
    Route::middleware(['admin'])->group(function () {
        Route::get('/employees/create', [KaryawanController::class, 'create'])->name('employees.create');
        Route::post('/employees', [KaryawanController::class, 'store'])->name('employees.store');
        Route::get('/employees/{id}/edit', [KaryawanController::class, 'edit'])->name('employees.edit');
        Route::put('/employees/{id}', [KaryawanController::class, 'update'])->name('employees.update');
        Route::delete('/employees/{id}', [KaryawanController::class, 'destroy'])->name('employees.destroy');
    });
});


require __DIR__.'/auth.php';
