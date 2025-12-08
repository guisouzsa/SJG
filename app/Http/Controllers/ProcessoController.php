<?php

namespace App\Http\Controllers;

use App\Http\Requests\Processos\CreateProcessoRequest;
use App\Http\Requests\Processos\UpdateProcessoRequest;
use Illuminate\Http\Request;
use App\Models\Processo;
use App\Models\Cliente;  

class ProcessoController extends Controller
{
    public function index()
    {
    
        $processos = Processo::with('cliente')->get();

        return view("processos.index", compact("processos"));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('processos.create', compact('clientes'));
    }

    public function store(CreateProcessoRequest $request)
    {
        $dados = $request->only([
            'cliente_id',     
            'numero_processo',
            'tipo',
            'status',
            'descricao',
            'documento'
        ]);

        if ($request->hasFile('documento')) {
            $dados['documento'] = $request->file('documento')->store('documentos', 'public');
        }

        Processo::create($dados);

        return redirect()->route('processos.index')->with('created', true);
    }

    public function edit(string $id)
    {
        $processo = Processo::findOrFail($id);
        $clientes = Cliente::all();  

        return view("processos.edit", compact("processo", "clientes"));
    }

    public function update(UpdateProcessoRequest $request, string $id)
    {
        $processo = Processo::findOrFail($id);

        $dados = $request->only([
            'cliente_id',  
            'numero_processo',
            'tipo',
            'status',
            'descricao',
            'documento'
        ]);

        if ($request->hasFile('documento')) {
            $dados['documento'] = $request->file('documento')->store('documentos', 'public');
        }

        $processo->update($dados);

        return redirect()->route('processos.index')->with('updated', true);
    }

    public function destroy(string $id)
    {
        $processo = Processo::findOrFail($id);
        $processo->delete();

        return redirect()->route('processos.index')->with('deleted', true);
    }
}
