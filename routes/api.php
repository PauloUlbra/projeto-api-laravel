<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cliente', [ClienteController::class, 'Listar']);

Route::get('/cliente/{id}', [ClienteController::class, 'BuscarPeloId']);

Route::post('/cliente', [ClienteController::class, 'Criar']);

Route::delete('/cliente/{id}', [ClienteController::class, 'Deletar']);

Route::put('/cliente/{id}', [ClienteController::class, 'Atualizar']);