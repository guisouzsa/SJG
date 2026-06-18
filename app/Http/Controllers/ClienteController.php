<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\Clientes\CreateClienteRequest;
use App\Http\Requests\Clientes\UpdateClienteRequest;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::where('user_id', Auth::id())->get();
        return view("clientes.index", compact("clientes"));
    }

    public function create()
    {
       return view("clientes.create");
    }

    public function store(CreateClienteRequest $request)
    {
        Cliente::create(array_merge($request->only([
            'nomeCompleto',
            'cpf_Cnpj',
            'telefone',
            'email',
            'endereco'
        ]), [
            'user_id' => Auth::id()
        ]));

        return redirect()->route('clientes.index')->with('created', true);
    }

    public function edit(string $id)
    {
        $cliente = Cliente::where('user_id', Auth::id())->findOrFail($id);
        return view("clientes.edit", compact("cliente"));
    }

    public function update(UpdateClienteRequest $request, string $id)
    {
        $cliente = Cliente::where('user_id', Auth::id())->findOrFail($id);
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
        $cliente = Cliente::where('user_id', Auth::id())->findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('deleted', true);
    }
}
