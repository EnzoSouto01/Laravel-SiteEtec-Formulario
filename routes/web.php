<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\ContatoController;

use App\Http\Controllers\CursoController;

use App\Http\Controllers\DepartamentoController;

Route::get('/', [HomeController::class, 'home'])->name('site.home');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/departamento', [DepartamentoController::class, 'departamento'])->name('site.departamento');

Route::get('/curso', [CursoController::class, 'curso'])->name('site.curso');
