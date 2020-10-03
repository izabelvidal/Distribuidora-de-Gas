<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GerenteController;

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

/*Route::resources([
    'clientes' => ClienteController::class,
    'produtos' => ProdutoController::class,
    'gerentes' => GerenteController::class,
    'vendas' => VendaController::class,
    'funcionarios' => FuncionarioController::class]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/

Route::prefix('/user')->namespace('User')->group(function(){
    Route::prefix('/gerente')->namespace('Gerente')->group(function(){
        Route::prefix('/criar_produto')->namespace('NovoProduto')->group(function(){
            Route::get('/', [GerenteController::class, 'cadastroProduto'])->middleware('auth');
            Route::post('/salvar' , [GerenteController::class, 'salvarProduto'])->name('salvar');
        });

    });
    Route::prefix('/funcionario')->namespace('Funcionario')->group(function(){
        
    });
    Route::prefix('/cliente')->namespace('Cliente')->group(function(){
        
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
