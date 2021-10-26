<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GravarSorteioController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\RedirectInicioController;
use App\Http\Controllers\ResultadoSorteioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [InicioController::class, 'inicio'])->name('inicio'); 
Route::post('/', [InicioController::class, 'inicio'])->name('inicio2'); 

Route::prefix('Sorteio')->group( function(){
    Route::post('inicio', [ResultadoSorteioController::class, 'inicio'])->name('Sorteio.inicio');
    Route::post('resultado', [ResultadoSorteioController::class, 'resultado'])->name('Sorteio.resultado');
});

Route::prefix('salvar')->group( function(){
    Route::post('gravar', [GravarSorteioController::class, 'gravar'])->name('salvar.gravar');
});

Route::prefix('dados')->group( function(){
    Route::get('historico', [HistoricoController::class, 'historico'])->name('historico');
});