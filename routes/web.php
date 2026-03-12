<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('acceuil');

Route::prefix('animal')->group(function () {
    
    Route::get('/create', [AnimalController::class, 'create'])->name('animal.creer');

    Route::get('/{id}', [AnimalController::class, 'show'])
        ->whereNumber('id')
        ->name('animal.info');

    Route::get('/{id}/edit', [AnimalController::class, 'edit'])->name('animal.editer');

    Route::get('/{id}/delete', [AnimalController::class, 'delete'])->name('animal.supprimer');

});

Route::fallback(function () {
    return view('errors.404');
});