<?php

namespace App\Http\Controllers;

use App\Http\Requests\audiencias\CreateAudienciaRequest;
use App\Http\Requests\audiencias\UpdateAudienciaRequest;
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

        return redirect()->route('audiencias.index')->with('created', true);
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

        return redirect()->route('audiencias.index')->with('updated', true);
    }

    public function destroy(string $id)
    {
        $audiencia = Audiencia::findOrFail($id);
        $audiencia->delete();

        return redirect()->route('audiencias.index')->with('deleted', true);
    }
}
