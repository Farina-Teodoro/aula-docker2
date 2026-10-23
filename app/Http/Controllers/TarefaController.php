<?php

namespace App\Http\Controllers;

use App\Http\Requests\TarefaRequest;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = Tarefa::query()->latest()->get();

        if (request()->expectsJson()) {
            return response()->json($tarefas);
        }

        return view('tarefas.index', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TarefaRequest $request)
    {
        $tarefa = Tarefa::create($this->validatedData($request));

        if ($request->expectsJson()) {
            return response()->json($tarefa, 201);
        }

        return to_route('tarefas.index')->with('sucesso', 'Tarefa criada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
    {
        return response()->json($tarefa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarefa $tarefa)
    {
        return view('tarefas.edit', compact('tarefa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TarefaRequest $request, Tarefa $tarefa)
    {
        $tarefa->update($this->validatedData($request));

        if ($request->expectsJson()) {
            return response()->noContent();
        }

        return to_route('tarefas.index')->with('sucesso', 'Tarefa atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();

        if (request()->expectsJson()) {
            return response()->noContent();
        }

        return to_route('tarefas.index')->with('sucesso', 'Tarefa removida com sucesso.');
    }

    private function validatedData(TarefaRequest $request): array
    {
        return $request->validated() + ['concluida' => $request->boolean('concluida')];
    }
}
