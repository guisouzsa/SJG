<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\clientes\CreateClienteRequest;
use App\Http\Requests\clientes\UpdateClienteRequest;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view("clientes.index", compact("clientes"));
    }

    public function create()
    {
       return view("clientes.create");
    }

    public function store(CreateClienteRequest $request)
    {
        Cliente::create($request->only([
            'nomeCompleto',
            'cpf_Cnpj',
            'telefone',
            'email',
            'endereco'
        ]));

        return redirect()->route('clientes.index')->with('created', true);
    }

    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view("clientes.edit", compact("cliente"));
    }

    public function update(UpdateClienteRequest $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->only([
            'nomeCompleto',
            'cpf_Cnpj',
            'telefone',
            'email',
            'endereco'
        ]));

        return redirect()->route('clientes.index')->with('updated', true);

    }

    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('deleted', true);
    }
}
