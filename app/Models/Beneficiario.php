<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'cpf',
        'nome',
        'sonbrenome',
        'telefone',
        'cep',
        'qtd_criancas',
        'qtd_adolecentes',
        'qtd_adultos',
        'qtd_idosos',
        'existe_gestante',
        'qtd_cestas',
        'status'  
    ];

    public function atividadeHistorico(){
        return $this->hasMany(AtividadeHistorico::class);
    }
}
