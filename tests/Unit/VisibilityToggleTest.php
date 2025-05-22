<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Task; // Pastikan model Task sudah dibuat dan benar

class VisibilityToggleTest extends TestCase
{
    /**
     * Test that toggleVisibility flips the boolean value of is_visible.
     */
    public function test_toggle_visibility_flips_boolean()
    {
        // Membuat instance task manual (tidak disimpan ke database)
        $task = new Task(['is_visible' => true]);

        // Memanggil method toggleVisibility pertama kali
        $task->toggleVisibility();
        $this->assertFalse($task->is_visible);

        // Memanggil lagi untuk balik ke true
        $task->toggleVisibility();
        $this->assertTrue($task->is_visible);
    }
}
