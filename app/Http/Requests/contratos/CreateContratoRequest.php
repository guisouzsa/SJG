<?php

namespace App\Http\Requests\contratos;

use Illuminate\Foundation\Http\FormRequest;

class CreateContratoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo'         => 'required|string|max:255',
            'tipo'           => 'required|string|max:100',
            'cliente_id'     => 'nullable|exists:clientes,id',
            'data_assinatura'=> 'required|date',
            'data_vencimento'=> 'required|date|after_or_equal:data_assinatura',
            'valor'          => 'required|numeric|min:0',
            'descricao'      => 'nullable|string',
        ];
    }
}
