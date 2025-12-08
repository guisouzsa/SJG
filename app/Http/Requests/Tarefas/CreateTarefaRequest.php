<?php

namespace App\Http\Requests\tarefas;

use Illuminate\Foundation\Http\FormRequest;

class CreateTarefaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo'       => 'required|string|max:255',
            'data_limite'  => 'required|date',
            'status'       => 'required|string|max:50',
            'descricao'    => 'nullable|string',
        ];
    }
}
