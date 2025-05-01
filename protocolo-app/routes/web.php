<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProtocoloController;

Route::get('/protocolo/novo', [ProtocoloController::class, 'create']);
Route::post('protocolo', [ProtocoloController::class, 'store'])->name('protocolo.store');
Route::get('/consulta', [ProtocoloController::class, 'formConsulta'])->name('consulta.form');
Route::post('/consulta', [ProtocoloController::class, 'consulta'])->name('consulta.resultado');