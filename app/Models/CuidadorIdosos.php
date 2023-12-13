<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuidadorIdosos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_completo',
        'rg',
        'cep',
        'bairro',
        'rua',
        'numero_casa',
        'celular',
        'status_pagamento',
        'complemento'
        
    ];
}
