<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_home_redirects_to_the_task_list(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/tarefas');
    }

    public function test_a_task_can_be_created_through_the_json_api(): void
    {
        $response = $this->postJson('/tarefas', [
            'titulo' => 'Estudar Laravel',
            'descricao' => 'Integrar o backend de tarefas.',
            'concluida' => false,
        ]);

        $response->assertCreated()->assertJsonPath('titulo', 'Estudar Laravel');
        $this->assertDatabaseHas('tarefas', ['titulo' => 'Estudar Laravel']);
    }
}
