<?php

namespace App\Http\Controllers;

use App\Http\Requests\Audiencias\CreateAudienciaRequest;
use App\Http\Requests\Audiencias\UpdateAudienciaRequest;
use App\Models\Audiencia;
use App\Models\Processo;
use Illuminate\Support\Facades\Auth;

class AudienciaController extends Controller
{
    public function index()
    {
        $audiencias = Audiencia::where('user_id', Auth::id())->with('processo.cliente')->get();
        return view("audiencias.index", compact("audiencias"));
        
    }

    public function create()
    {
        $processos = Processo::where('user_id', Auth::id())->get();
        return view("audiencias.create", compact('processos'));
        
    }

    public function store(CreateAudienciaRequest $request)
    {
        Audiencia::create(array_merge($request->only([
            'processo_id',
            'titulo',
            'tipo',
            'data_horario',
            'local',
            'descricao'
        ]), [
            'user_id' => Auth::id()
        ]));

        return redirect()->route('audiencias.index')->with('created', true);
    }

    public function edit(string $id)
    {
        $audiencia = Audiencia::where('user_id', Auth::id())->findOrFail($id);
        $processos = Processo::where('user_id', Auth::id())->get();

        return view("audiencias.edit", compact("audiencia", "processos"));
    }

    public function update(UpdateAudienciaRequest $request, string $id)
    {
        $audiencia = Audiencia::where('user_id', Auth::id())->findOrFail($id);

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
        $audiencia = Audiencia::where('user_id', Auth::id())->findOrFail($id);
        $audiencia->delete();

        return redirect()->route('audiencias.index')->with('deleted', true);
    }
}
