<?php

use Illuminate\Support\Facades\Route;



Route::apiResource('celulares', \App\Http\Controllers\CelularesController::class)
    ->middleware('auth:sanctum');
    
    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

    Route::post('/register', [\App\Http\Controllers\UserController::class, 'store']);

   
    Route::apiResource('categorias', \App\Http\Controllers\CategoriaController::class);