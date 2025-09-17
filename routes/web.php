<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ContatoController;

Route::get('/', function() {
    return view('site.home');
})->name('site.home');

Route::get('/departamento', [DepartamentoController::class, 'departamento'])->name('site.departamento');
Route::get('/curso', [CursoController::class, 'curso'])->name('site.curso');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function() {
    echo 'Página não encontrada. <a href="'.route('site.home'),'">Clique aqui</a> para ir a página inicial';
});

require __DIR__.'/auth.php';
