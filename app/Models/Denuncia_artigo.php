<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia_artigo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_artigo',
        'id_denuncia'
    ];

    public function denuncia(){
        return $this->belongsTo(Denuncia::class, 'id', 'id_denuncia');
    }

    public function artigo(){
        return $this->belongsTo(Artigo::class, 'id', 'id_artigo');
    }
}
