@extends('layouts.app')

@section('content')
    @forelse ($tarefas as $tarefa)
        <article class="tarefa {{ $tarefa->concluida ? 'concluida' : '' }}">
            <h2>{{ $tarefa->titulo }}</h2>
            <p>{{ $tarefa->descricao }}</p>
            <p><strong>Status:</strong> {{ $tarefa->concluida ? 'Concluída' : 'Pendente' }}</p>
            <div class="acoes">
                <a href="{{ route('tarefas.edit', $tarefa) }}">Editar</a>
                <form action="{{ route('tarefas.destroy', $tarefa) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="remover" type="submit">Remover</button>
                </form>
            </div>
        </article>
    @empty
        <p>Nenhuma tarefa cadastrada.</p>
    @endforelse
@endsection
