<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_artigo',
        'nome_proposta',
        'categoria_proposta',
        'condicao_proposta',
        'tempo_uso_proposta',
        'endereco_img_prop'
    ];
}
