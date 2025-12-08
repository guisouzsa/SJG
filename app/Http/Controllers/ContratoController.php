<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Contratos\CreateContratoRequest;
use App\Http\Requests\Contratos\UpdateContratoRequest;
use App\Models\Contrato;
use App\Models\Cliente;

class ContratoController extends Controller
{
    public function index()
    {
        $contratos = Contrato::with('cliente')->get();
        return view("contratos.index", compact("contratos"));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('contratos.create', compact('clientes'));
    }

    public function store(CreateContratoRequest $request)
    {
        $dados = $request->only([
            'cliente_id',
            'titulo',
            'tipo',
            'data_assinatura',
            'data_vencimento',
            'valor',
            'descricao',
            'documento'
        ]);

        if ($request->hasFile('documento')) {
            $dados['documento'] = $request->file('documento')->store('contratos', 'public');
        }

        Contrato::create($dados);

        return redirect()->route('contratos.index')->with('created', true);
    }

    public function edit(string $id)
    {
        $contrato = Contrato::findOrFail($id);
        $clientes = Cliente::all();

        return view("contratos.edit", compact("contrato", "clientes"));
    }

    public function update(UpdateContratoRequest $request, string $id)
    {
        $contrato = Contrato::findOrFail($id);

        $dados = $request->only([
            'cliente_id',
            'titulo',
            'tipo',
            'data_assinatura',
            'data_vencimento',
            'valor',
            'descricao',
            'documento'
        ]);

        if ($request->hasFile('documento')) {
            $dados['documento'] = $request->file('documento')->store('contratos', 'public');
        }

        $contrato->update($dados);

        return redirect()->route('contratos.index')->with('updated', true);
    }

    public function destroy(string $id)
    {
        $contrato = Contrato::findOrFail($id);
        $contrato->delete();

        return redirect()->route('contratos.index')->with('deleted', true);
    }
}
