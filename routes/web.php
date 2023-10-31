<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\ProveedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/vehiculos', [VehiculoController::class, 'index'])->name('vehiculos.index');

Route::get('/mantenimiento', function () {
    return view('mantenimiento');
})->name('mantenimiento');
Route::get('/structure', function () {
    return view('structure');
})->name('structue');

Auth::routes();
Route::post('/store', [VehiculoController::class, 'store'])->name('vehiculos.store');
Route::post('/proveedor', [ProveedorController::class, 'store'])->name('proveedor.store');
Route::post('/mantenimiento', [MantenimientoController::class, 'store'])->name('mantenimiento.store');
Route::put('/update/{Num_serieE}', [VehiculoController::class, 'update'])->name('vehiculos.update');
Route::get('/show/{Num_Serie}', [MantenimientoController::class, 'show'])->name('mantenimiento.show');
Route::get('/home', [VehiculoController::class, 'index'])->name('vehiculos.index');
