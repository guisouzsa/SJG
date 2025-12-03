<?php

namespace App\Http\Requests\tarefas;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTarefaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('tarefa') ?? $this->route('id');

        return [
            'titulo'       => 'required|string|max:255',
            'data_limite'  => 'required|date',
            'status'       => 'required|string|max:50',
            'descricao'    => 'nullable|string',
        ];
    }
}
