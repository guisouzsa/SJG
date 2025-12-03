<?php

namespace App\Http\Requests\audiencias;

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
            'titulo'     => 'required|string|max:255',
            'tipo'       => 'required|string|max:100',
            'data_hora'  => 'required|date',
            'local'      => 'required|string|max:255',
            'descricao'  => 'nullable|string',
        ];
    }
}
