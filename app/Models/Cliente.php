<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        "user_id",
        "nomeCompleto",
        "cpf_Cnpj",
        "telefone",
        "email",
        "endereco"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function processos()
    {
        return $this->hasMany(Processo::class);
    }
}
