<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GravarSorteioController;
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

Route::get('/', function () {
    return view('welcome');
});   

Route::prefix('Sorteio')->group( function(){
    Route::post('resultado', [ResultadoSorteioController::class, 'resultado'])->name('Sorteio.resultado');
    Route::post('inicio', [ResultadoSorteioController::class, 'inicio'])->name('Sorteio.inicio');
});

Route::prefix('salvar')->group( function(){
    Route::post('gravar/{id}', [GravarSorteioController::class, 'gravar'])->name('salvar.gravar');
});