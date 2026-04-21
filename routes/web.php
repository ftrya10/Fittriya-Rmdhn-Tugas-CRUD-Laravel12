<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;

Route::get('/', function () {
    return view('welcome');
});

// ROUTE SALON
Route::get('/salon', [SalonController::class, 'index']);
Route::get('/salon/create', [SalonController::class, 'create']);
Route::post('/salon/store', [SalonController::class, 'store']);
Route::get('/salon/edit/{id}', [SalonController::class, 'edit']);
Route::put('/salon/{id}', [SalonController::class, 'update']);
Route::delete('/salon/{id}', [SalonController::class, 'destroy']);