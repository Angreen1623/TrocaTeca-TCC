<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_denunciador',
        'mensagem_denun',
        'estado_denuncia'
    ];

    public function denuncia_artigo(){
        return $this->hasOne(Denuncia_artigo::class, 'id_denuncia');
    }

    public function denuncia_usuario(){
        return $this->hasOne(Denuncia_usuario::class, 'id_denuncia');
    }
}
