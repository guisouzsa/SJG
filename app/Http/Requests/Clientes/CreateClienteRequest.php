<?php

namespace App\Http\Requests\clientes;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nomeCompleto' => 'required|string|max:255',
            'cpf_Cnpj'     => 'required|string|unique:clientes,cpf_Cnpj',
            'telefone'     => 'required|string|max:20',
            'email'        => 'required|email|unique:clientes,email',
            'endereco'     => 'required|string|max:255',
        ];
    }
}
