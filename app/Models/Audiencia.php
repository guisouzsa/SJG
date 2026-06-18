<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audiencia extends Model
{
    protected $fillable = [
        'user_id',
        'processo_id',
        'titulo',
        'tipo',
        'data_horario',
        'local',
        'descricao',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function processo()
    {
        return $this->belongsTo(Processo::class);
    }

    protected $casts = [
        'data_horario' => 'datetime',
    ];
}

