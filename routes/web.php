<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\sobreNosController;
use App\Http\Controllers\contatoController;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\fornecedorController;
use App\Http\Controllers\produtosController;
use App\Http\Controllers\testeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [indexController::class, 'index'])->name('site.index');
Route::get('/sobrenos', [sobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [contatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [contatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [contatoController::class, 'salvar'])->name('site.contato');
Route::get('/login', function (){return 'Login';})->name('site.login');

Route::prefix('app')->group(function() {
    Route::get('/clientes', [clientesController::class, 'clientes'] )->name('app.clientes');
    Route::get('/fornecedores', [fornecedorController::class, 'index'] )->name('app.fornecedores');
    Route::get('/produtos', [produtosController::class, 'produtos'] )->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [testeController::class, 'teste'])->name('teste');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui para retornar a página inicial.</a>';
});
