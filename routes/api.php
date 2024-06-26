<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FaleConoscoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('faleconosco',App\Http\Controllers\FaleConoscoController::class);

Route::apiResource('motivo',App\Http\Controllers\MotivoContatoController::class);