<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('chirps', ChirpController::class)
    ->only(['index','edit', 'update', 'store', 'destroy'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
