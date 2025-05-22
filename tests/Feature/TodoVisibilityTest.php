<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Task; // ✅ Ubah dari Todo menjadi Task

class TodoVisibilityTest extends TestCase
{
    use RefreshDatabase;

    public function test_toggle_todo_visibility()
    {
        // Buat task pertama
        $task = Task::factory()->create(['is_visible' => true]);

        // Panggil endpoint toggle
        $response = $this->patchJson("/todos/{$task->id}/toggle-visibility");

        // Pastikan response sukses
        $response->assertStatus(200);
        $response->assertJson(['is_visible' => false]);

        // Cek di database
        $this->assertDatabaseHas('tasks', [ // ✅ Pastikan nama tabel benar
            'id' => $task->id,
            'is_visible' => false
        ]);
    }
}
