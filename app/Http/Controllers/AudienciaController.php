<?php

namespace App\Http\Controllers;

use App\Http\Requests\Audiencias\CreateAudienciaRequest;
use App\Http\Requests\Audiencias\UpdateAudienciaRequest;
use Illuminate\Http\Request;
use App\Models\Audiencia;
use App\Models\Processo;

class AudienciaController extends Controller
{
    public function index()
    {
        $audiencias = Audiencia::with('processo.cliente')->get();
        return view("audiencias.index", compact("audiencias"));
        
    }

    public function create()
    {
        $processos = Processo::all();
        return view("audiencias.create", compact('processos'));
        
    }

    public function store(CreateAudienciaRequest $request)
    {
        Audiencia::create($request->only([
            'processo_id',
            'titulo',
            'tipo',
            'data_horario',
            'local',
            'descricao'
        ]));

        return redirect()->route('audiencias.index')->with('success', 'Audiência cadastrada com sucesso!');
    }

    public function edit(string $id)
    {
        $audiencia = Audiencia::findOrFail($id);
        $processos = Processo::all();

        return view("audiencias.edit", compact("audiencia", "processos"));
    }

    public function update(UpdateAudienciaRequest $request, string $id)
    {
        $audiencia = Audiencia::findOrFail($id);

        $audiencia->update($request->only([
            'processo_id',
            'titulo',
            'tipo',
            'data_horario',
            'local',
            'descricao'
        ]));

        return redirect()->route('audiencias.index')->with('success', 'Audiência atualizada com sucesso!');
    }

    public function destroy(string $id)
    {
        $audiencia = Audiencia::findOrFail($id);
        $audiencia->delete();

        return redirect()->route('audiencias.index')->with('success', 'Audiência excluída com sucesso!');
    }
}
