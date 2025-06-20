<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TourController;

Route::get('/', [IndexController::class, 'index']);

Route::get('/tours', [TourController::class, 'index'])
    ->name('tours.index');
Route::get('/tours/create', [TourController::class, 'create'])
    ->name('tours.create');
Route::post('/tours', [TourController::class, 'store'])
    ->name('tours.store');
Route::get('/tours/{tour}', [TourController::class, 'show'])
    ->name('tours.show');
Route::get('/tours/{tour}/edit', [TourController::class, 'edit'])
    ->name('tours.edit');
Route::put('/tours/{tour}', [TourController::class, 'update'])
    ->name('tours.update');
Route::delete('/tours/{tour}', [TourController::class, 'destroy'])
    ->name('tours.destroy');
