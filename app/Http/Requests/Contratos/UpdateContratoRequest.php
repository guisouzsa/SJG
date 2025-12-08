<?php

namespace App\Http\Requests\contratos;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContratoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('contrato') ?? $this->route('id');

        return [
            'titulo'         => 'required|string|max:255',
            'tipo'           => 'required|string|max:100',
            'cliente_id'     => 'required|exists:clientes,id',
            'data_assinatura'=> 'required|date',
            'data_vencimento'=> 'required|date|after_or_equal:data_assinatura',
            'valor'          => 'required|numeric|min:0',
            'descricao'      => 'nullable|string',
        ];
    }
}
