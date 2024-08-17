<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_artigo',
        'valor_sugerido_artigo',
        'preferencia_troca_artigo',
        'categoria_artigo',
        'condicao_artigo',
        'id_usuario_ofertante',
        'tempo_uso_artigo'
    ];

    public function imagens()
    {
        return $this->hasMany(Imagem_artigo::class, 'id_artigo');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario_ofertante');
    }

}
