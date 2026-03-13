<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animal')->group(function () {
    
    Route::get('/creer', [AnimalController::class, 'create'])->name('animal.create');

    Route::get('/{id}', [AnimalController::class, 'show'])
        ->whereNumber('id')
        ->name('animal.show');

    Route::get('/{id}/editer', [AnimalController::class, 'edit'])->name('animal.edit');

    Route::get('/{id}/supprimer', [AnimalController::class, 'delete'])->name('animal.delete');

});

Route::fallback(function () {
    return view('errors.404');
});