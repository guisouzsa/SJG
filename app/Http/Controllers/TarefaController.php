<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\tarefas\CreateTarefaRequest;
use App\Http\Requests\tarefas\UpdateTarefaRequest;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return view("tarefas.index", compact("tarefas"));
    }

    public function create()
    {
        return view("tarefas.create");
    }

    public function store(CreateTarefaRequest $request)
    {
        Tarefa::create($request->only([
            'titulo',
            'data_limite',
            'status',
            'descricao'
        ]));

        return redirect()->route('tarefas.index')->with('updated', true);
    }

    public function show(string $id)
    {
        //não usar
    }

    public function edit(string $id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return view("tarefas.edit", compact("tarefa"));
    }

    public function update(UpdateTarefaRequest $request, string $id)
    {
        $tarefa = Tarefa::findOrFail($id);

        $tarefa->update($request->all());

        return redirect()->route('tarefas.index')->with('updated', true);
    }

    public function destroy(string $id)
    {
        $tarefa = Tarefa::findOrFail($id);

        $tarefa->delete();

        return redirect()->route('tarefas.index')->with('deleted', true);
    }
}
