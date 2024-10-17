<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route("cars.index");
});

use App\Http\Controllers\CarsController;

Route::resource('cars', CarsController::class);

Route::get('/cars/{id}', [CarsController::class, 'show'])->name('cars.show');
