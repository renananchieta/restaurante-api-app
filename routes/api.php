<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('restaurante')->group(function () {
    Route::get('categorias', [CategoriaController::class, 'index']);
    Route::post('categorias/store', [CategoriaController::class, 'store']);
    Route::get('categorias/show/{categoria}', [CategoriaController::class, 'show']);
    Route::put('categorias/update/{categoria}', [CategoriaController::class, 'update']);
    Route::delete('categorias/delete/{categoria}', [CategoriaController::class, 'delete']);

    Route::apiResource('produtos', ProdutosController::class);
    Route::apiResource('cardapio', CardapioController::class);
    Route::apiResource('clientes', ClienteController::class);
    Route::get('cliente/{cliente}/extrato', [ClienteController::class, 'extrato']);
    Route::post('cliente/transferir-credito', [ClienteController::class, 'transferirCredito']);
});