<?php

namespace App\Http\Requests\clientes;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('cliente') ?? $this->route('id');

        return [
            'nomeCompleto' => 'required|string|max:255',
            'cpf_Cnpj'     => "required|string|unique:clientes,cpf_Cnpj,{$id}",
            'telefone'     => 'required|string|max:20',
            'email'        => "required|email|unique:clientes,email,{$id}",
            'endereco'     => 'required|string|max:255',
        ];
    }
}
