<?php

use App\Http\Controllers\v1\MaintenanceController;
use App\Http\Controllers\v1\UserController;
use App\Http\Controllers\v1\VehicleController;
use App\Http\Controllers\v1\VehiclemodelController;
use App\Http\Controllers\v1\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('vehiclemodels', VehiclemodelController::class)->middleware(['auth', 'verified']);
Route::resource('users', UserController::class)->middleware(['auth', 'verified']);
Route::resource('vehicles', VehicleController::class)->middleware(['auth', 'verified']);
Route::resource('maintenances', MaintenanceController::class)->middleware(['auth', 'verified']);

Route::resource('maintenanceusers', DashboardController::class)->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
