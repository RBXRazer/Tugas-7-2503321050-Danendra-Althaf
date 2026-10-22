<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SepedaMotorController;

// Halaman utama langsung ke dashboard MOTORHUB
Route::get('/', function () {
    return redirect()->route('motor.index');
});

// Routing CRUD Sepeda Motor
Route::resource('motor', SepedaMotorController::class);