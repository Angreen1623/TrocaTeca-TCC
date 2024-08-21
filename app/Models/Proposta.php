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
        'endereco_img_prop',
        'status_proposta',
        'id_usuario_int'
    ];

    public function artigo(){
        return $this->belongsTo(Artigo::class, 'id_artigo');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_usuario_int');
    }
    public function acordo(){
        return $this->hasOne(Acordo::class, 'id');
    }
    public function mensagem(){
        return $this->hasMany(Mensagem::class, 'id_proposta', 'id');
    }
}
