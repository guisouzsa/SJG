<?php

namespace App\Http\Requests\Audiencias;

use Illuminate\Foundation\Http\FormRequest;

class CreateAudienciaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'processo_id'  => 'required|exists:processos,id',
            'titulo'       => 'required|string|max:255',
            'tipo'         => 'required|string|max:255',
            'data_horario' => 'required|date',
            'local'        => 'required|string|max:255',
            'descricao'    => 'nullable|string',
        ];
    }
}
