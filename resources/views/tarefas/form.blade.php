<label for="titulo">Título</label>
<input id="titulo" name="titulo" type="text" value="{{ old('titulo', $tarefa->titulo ?? '') }}" required>
@error('titulo') <span class="erro">{{ $message }}</span> @enderror

<label for="descricao">Descrição</label>
<textarea id="descricao" name="descricao" rows="5" required>{{ old('descricao', $tarefa->descricao ?? '') }}</textarea>
@error('descricao') <span class="erro">{{ $message }}</span> @enderror

<label>
    <input name="concluida" type="checkbox" value="1" @checked(old('concluida', $tarefa->concluida ?? false))>
    Concluída
</label>

<div class="acoes">
    <button type="submit">Salvar</button>
    <a href="{{ route('tarefas.index') }}">Cancelar</a>
</div>
