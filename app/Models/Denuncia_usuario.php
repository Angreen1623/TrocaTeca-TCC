<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia_usuario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_artigo',
        'denunciado',
        'endereco_img_denun'
    ];

    public function denuncia(){
        return $this->belongsTo(Denuncia::class, 'id_denuncia');
    }

    public function user(){
        return $this->belongsTo(User::class, 'denunciado');
    }
}
