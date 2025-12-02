<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        'cliente_id',
        'titulo',
        'tipo',
        'data_assinatura',
        'data_vencimento',
        'valor',
        'descricao',
        'documento'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
