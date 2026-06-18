<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tarefas\CreateTarefaRequest;
use App\Http\Requests\Tarefas\UpdateTarefaRequest;
use App\Models\Tarefa;
use Illuminate\Support\Facades\Auth;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::where('user_id', Auth::id())->get();
        return view("tarefas.index", compact("tarefas"));
    }

    public function create()
    {
        return view("tarefas.create");
    }

    public function store(CreateTarefaRequest $request)
    {
        Tarefa::create(array_merge($request->only([
            'titulo',
            'data_limite',
            'status',
            'descricao'
        ]), [
            'user_id' => Auth::id()
        ]));

        return redirect()->route('tarefas.index')->with('updated', true);
    }

    public function show(string $id)
    {
        //não usar
    }

    public function edit(string $id)
    {
        $tarefa = Tarefa::where('user_id', Auth::id())->findOrFail($id);
        return view("tarefas.edit", compact("tarefa"));
    }

    public function update(UpdateTarefaRequest $request, string $id)
    {
        $tarefa = Tarefa::where('user_id', Auth::id())->findOrFail($id);

        $tarefa->update($request->all());

        return redirect()->route('tarefas.index')->with('updated', true);
    }

    public function destroy(string $id)
    {
        $tarefa = Tarefa::where('user_id', Auth::id())->findOrFail($id);

        $tarefa->delete();

        return redirect()->route('tarefas.index')->with('deleted', true);
    }
}
