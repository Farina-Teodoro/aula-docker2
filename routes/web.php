<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::redirect('/', '/tarefas');
Route::resource('tarefas', TarefaController::class);
