<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $fillable = [
        'user_id',
        'cliente_id',
        'numero_processo',
        'tipo',
        'status',
        'descricao',
        'documento',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function audiencias()
    {
        return $this->hasMany(Audiencia::class);
    }
}
