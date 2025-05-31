<?php

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
})->name('welcome');

//Rotas para o treinamento
Route::get('/treinamentos', [App\Http\Controllers\TreinamentoController::class, 'index'])
         ->name('treinamentos.index');
Route::get('/treinamento/novo', [App\Http\Controllers\TreinamentoController::class, 'create'])
         ->name('treinamento.create');
Route::post('/treinamento', [App\Http\Controllers\TreinamentoController::class, 'store'])
         ->name('treinamento.store');
Route::get('/treinamento/{id}', [App\Http\Controllers\TreinamentoController::class, 'show'])
         ->name('treinamento.show');
Route::get('/treinamento/{id}/editar', [App\Http\Controllers\TreinamentoController::class, 'edit'])
         ->name('treinamento.edit');
Route::put('/treinamento/{id}', [App\Http\Controllers\TreinamentoController::class, 'update'])
         ->name('treinamento.update');
Route::delete('/treinamento/{id}', [App\Http\Controllers\TreinamentoController::class, 'destroy'])
         ->name('treinamento.destroy');

// Route::resources([
//     'treinamentos' => App\Http\Controllers\TreinamentoController::class,
// ]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
