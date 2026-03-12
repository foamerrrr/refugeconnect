<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/animal/create', [AnimalController::class, 'create'])->name('animal.create');

Route::get('/animal/{id}', [AnimalController::class, 'show'])
    ->whereNumber('id')
    ->name('animal.show');

Route::get('/animal/{id}/edit', [AnimalController::class, 'edit'])->name('animal.edit');

Route::get('/animal/{id}/delete', [AnimalController::class, 'delete'])->name('animal.delete');

Route::fallback(function () {
    return view('errors.404');
});

