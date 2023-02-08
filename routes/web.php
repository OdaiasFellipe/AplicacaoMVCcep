<?php

use App\Http\Controllers\EnderecoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EnderecoController::class, 'index'])->name('home');

Route::get('/buscar', [EnderecoController::class, 'buscar'])->name('buscar');

Route::post('/salvar', [EnderecoController::class, 'salvar'])->name('salvar');

Route::get('/adicionar', [EnderecoController::class, 'adicionar'])->name('adicionar');
