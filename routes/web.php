<?php

use App\Http\Controllers\NivelAcessoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rota de cadastro

Route::get('/nivel-acesso/cadastro',[NivelAcessoController::class, 'cadastro'])
->name('nivel-acesso.cadastro');

// Rota de salvar
Route::post('/nivel-acesso/salvar', [NivelAcessoController::class, 'add'])
->name('nivel-acesso.salvar');

// Rota de listar
Route::get('/nivel-acesso/listar', [NivelAcessoController::class, 'listar'])
->name('nivel-acesso.listar');

// Rota de deletar
Route::delete('/nivel-acesso/deletar/{id}', [NivelAcessoController::class, 'deletar'])
->name('nivel-acesso.deletar');

// Rota de atualização
Route::get('/nivel-acesso/atualizar/{id}', [NivelAcessoController::class, 'atualizar'])
->name('nivel-acesso.atualizar');