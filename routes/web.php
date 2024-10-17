<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route("cars.index");
});

use App\Http\Controllers\CarsController;
use App\Http\Controllers\UbicationsController;

Route::get('/cars/ubications', [UbicationsController::class, 'index'])->name('cars.ubications');

Route::resource('cars', CarsController::class);
