<?php

namespace App\Http\Requests\processos;

use Illuminate\Foundation\Http\FormRequest;

class CreateProcessoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cliente_id'      => 'required|exists:clientes,id',
            'numero_processo' => 'required|string|unique:processos,numero_processo',
            'tipo'            => 'required|string|max:100',
            'status'          => 'required|string|max:100',
            'descricao'       => 'nullable|string',
            'documento'       => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048'
        ];
    }
}
