<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class veiculo extends Model
{
    use HasFactory; 
    
    protected $primaryKey = 'idveiculo';
       protected $fillable = [
       
        'nomeVeiculo',
        'corVeiculo',
        'fabricacao',
        'montadora'
    ];
}


