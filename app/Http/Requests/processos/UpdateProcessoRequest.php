<?php

namespace App\Http\Requests\processos;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProcessoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('processo') ?? $this->route('id');

        return [
            'numero_processo' => "required|string|unique:processos,numero_processo,{$id}",
            'tipo'            => 'required|string|max:100',
            'status'          => 'required|string|max:100',
            'descricao'       => 'nullable|string',
        ];
    }
}
