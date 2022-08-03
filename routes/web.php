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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rotas para trabalhar com serviços
Route::get('/servicos', [\App\Http\Controllers\ServicoController::class, 'index'])->name('servicos.index');
Route::get('/servicos/create', [\App\Http\Controllers\ServicoController::class, 'create'])->name('servicos.create');
Route::post('/servicos', [\App\Http\Controllers\ServicoController::class, 'store'])->name('servicos.store');
