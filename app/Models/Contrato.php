<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        'user_id',
        'cliente_id',
        'titulo',
        'tipo',
        'data_assinatura',
        'data_vencimento',
        'valor',
        'descricao',
        'documento'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
