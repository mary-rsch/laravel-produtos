<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/criar-produto', [ProdutosController::class, 'create']);
Route::get('/editar-produto', [ProdutosController::class, 'edit']);

Route::resource('produtos', ProdutosController::class);

