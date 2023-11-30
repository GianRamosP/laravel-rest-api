<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\UsuarioComunController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('managers', ManagerController::class)->except(['create', 'edit']);
Route::resource('admin', AdminController::class)->except(['create', 'edit']);
Route::resource('habitacion', HabitacionController::class)->except(['create', 'edit']);
Route::resource('reserva', ReservaController::class)->except(['create', 'edit']);
Route::resource('usuario_comun', UsuarioComunController::class)->except(['create', 'edit']);
