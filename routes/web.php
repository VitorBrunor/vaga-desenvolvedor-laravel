<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;

// Rota para a página inicial que redireciona para a view de boas-vindas
Route::get('/', function () {
    return view('welcome'); // Certifique-se de ter uma view welcome.blade.php
});

// Rotas para o CRUD de clientes
Route::resource('clientes', ClienteController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('produtos', ProdutoController::class);
