<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class VeiculoController extends Controller
{
    //para mostrara a tela administrativa

    public function MostrarHome(){
        return View ('homeadm');
    }


// para mostrar tela de cadastro de eventos
public function MostrarVeiculo(){
    return View ('cadastra-veiculo');
}

// para salvar os registros na tabela eventos

public function CadastrarVeiculo(Request $request){
    $registros = $request->Validate([
        'nomeveiculo'=>'string|required',
        'corVeiculo'=>'string|required',
        'fabricacao'=>'date|required',
        'montadora'=>'string|required',
    ]);
    Eventos::create($registros);
    return Redirect::route('home-adm');
}



}