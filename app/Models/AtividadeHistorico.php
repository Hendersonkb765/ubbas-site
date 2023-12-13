<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtividadeHistorico extends Model
{
    use HasFactory;

    protected $fillable= [
        'tipo',
        'status',
        'beneficiarios_id',
        'users_id',
        'data_conlusao'
    ];

    public function beneficiario(){
        return $this->belongsTo(Beneficiario::class);
    }
}
