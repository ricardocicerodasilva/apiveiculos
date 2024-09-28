<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculoController;

Route::get('/',[VeiculoController::class,'MostrarHome'])->name('home-adm');
Route::get('/cadastra-veiculo',[VeiculoController::class,'MostrarCadastroVeiculo'])->name('show-cadastro-veiculo');

// para cadastrar
Route::post('/cadastra-veiculo',[VeiculoController::class,'Cadastrarveiculo'])->name('cadastrar-veiculo');

