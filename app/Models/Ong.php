<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    use HasFactory;

    protected $table = 'ongs';
    protected $fillable = [
        'cnpj',
        'razao_social',
        
        
    ];
}
