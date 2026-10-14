@extends('layouts.app')

@section('content')
    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        @include('tarefas.form')
    </form>
@endsection
