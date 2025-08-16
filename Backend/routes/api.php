<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\ProductoController;

// Rutas para API REST
Route::apiResource('ingresos', IngresoController::class);
Route::apiResource('productos', ProductoController::class);