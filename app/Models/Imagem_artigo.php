<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem_artigo extends Model
{
    use HasFactory;

    public function artigo()
    {
        return $this->belongsTo(Artigo::class, 'id_artigo');
    }
}
