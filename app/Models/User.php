<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'sobrenome',
        'email',
        'datan',
        'estado',
        'cidade',
        'password',
        'info_sobremim',
        'estado_conta',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function acordosBemSucedidos()
    {
        return $this->hasManyThrough(Acordo::class, Proposta::class, 'id_usuario_int', 'id_proposta', 'id', 'id')
                    ->where('status_acordo', 4); // Aqui, considerando o status 4 como troca bem-sucedida
    }
    
}
