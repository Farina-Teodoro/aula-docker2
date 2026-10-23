<?php

namespace Database\Factories;

use App\Models\Tarefa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tarefa>
 */
class TarefaFactory extends Factory
{
    protected $model = Tarefa::class;

    public function definition(): array
    {
        return [
            'titulo' => fake()->sentence(),
            'descricao' => fake()->paragraph(),
            'concluida' => fake()->boolean(),
        ];
    }
}
