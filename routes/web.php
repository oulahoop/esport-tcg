<?php

use App\Http\Controllers\Cards\CardsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('cards', [CardsController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('cards');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
