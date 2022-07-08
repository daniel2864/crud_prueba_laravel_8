<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/', [PersonaController::class, 'index']);
Route::get('/create', [PersonaController::class, 'create'])->name('form_crear');
Route::post('/store', [PersonaController::class, 'store'])->name('guardar_form');
Route::get('/edit/{id}', [PersonaController::class, 'edit'])->name('form_editar');
Route::post('/edit_submit/{id}', [PersonaController::class, 'edit_submit'])->name('guardar_edit');
Route::get('/delete/{id}', [PersonaController::class, 'delete'])->name('borrar');
