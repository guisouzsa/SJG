<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audiencia extends Model
{
    protected $fillable = [
        'processo_id',
        'titulo',
        'tipo',
        'data_horario' => 'datetime',
        'local',
        'descricao',
    ];

    public function processo()
    {
        return $this->belongsTo(Processo::class);
    }

    protected $casts = [
        'data_horario' => 'datetime',
    ];
}

