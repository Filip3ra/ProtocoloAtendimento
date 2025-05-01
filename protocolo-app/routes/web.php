<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProtocoloController;

/**
 * Rotas Públicas
 */

Route::get('/', function () {
    return view('welcome');
});

// Rota para exibir formulário
Route::get('/protocolo/criar', [ProtocoloController::class, 'create'])->name('protocolo.create');
Route::post('/protocolo', [ProtocoloController::class, 'store'])->name('protocolo.store');

// Rota de consulta
Route::get('/consulta', [ProtocoloController::class, 'formConsulta'])->name('consulta.form');
Route::post('/consulta', [ProtocoloController::class, 'consulta'])->name('consulta.resultado');
//Route::get('/consulta/{numero}', [ProtocoloController::class, 'resultado'])->name('consulta.resultado');


/**
 * Rotas Protegidas
 */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){
    Route::get('dashboard', [ProtocoloController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
