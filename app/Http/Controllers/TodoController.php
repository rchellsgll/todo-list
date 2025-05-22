<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function toggleVisibility($id)
    {
        $task = Task::findOrFail($id);
        $task->toggleVisibility();
        $task->save();

        return response()->json([
            'message' => 'Visibility updated',
            'is_visible' => $task->is_visible,
        ]);
    }
}
