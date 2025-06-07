<?php

use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('clases', [WebController::class, 'clases'])->name('clases');
Route::get('propuestas', [WebController::class, 'propuestas'])->name('propuestas');
Route::get('nosotros', [WebController::class, 'sobre_nosotros'])->name('nosotros');
Route::get('recursos', [WebController::class, 'recursos'])->name('recursos');
