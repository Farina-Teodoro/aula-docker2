<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minhas tarefas</title>
    <style>
        body { max-width: 760px; margin: 40px auto; padding: 0 16px; font-family: Arial, sans-serif; color: #1f2937; }
        header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; }
        a, button { color: #fff; background: #2563eb; border: 0; border-radius: 4px; padding: 8px 12px; font: inherit; cursor: pointer; text-decoration: none; }
        .alert { background: #dcfce7; color: #166534; padding: 12px; margin-bottom: 16px; border-radius: 4px; }
        .erro { color: #b91c1c; margin-top: 4px; display: block; }
        .tarefa { border: 1px solid #d1d5db; border-radius: 6px; padding: 16px; margin-bottom: 12px; }
        .concluida { opacity: .6; } .concluida h2 { text-decoration: line-through; }
        .acoes { display: flex; gap: 8px; margin-top: 12px; } .acoes form { margin: 0; }
        .remover { background: #dc2626; } label { display: block; margin-top: 14px; font-weight: bold; }
        input[type=text], textarea { width: 100%; box-sizing: border-box; margin-top: 5px; padding: 8px; }
    </style>
</head>
<body>
    <header>
        <h1>Minhas tarefas</h1>
        <a href="{{ route('tarefas.create') }}">Nova tarefa</a>
    </header>

    @if (session('sucesso'))
        <p class="alert">{{ session('sucesso') }}</p>
    @endif

    @yield('content')
</body>
</html>
