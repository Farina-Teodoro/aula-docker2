@extends('layouts.app')

@section('content')
    <form action="{{ route('tarefas.update', $tarefa) }}" method="POST">
        @csrf
        @method('PUT')
        @include('tarefas.form')
    </form>
@endsection
