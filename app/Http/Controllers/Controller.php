<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function toggleVisibility($id)
{
    // 1. Cari todo by ID
    $todo = Todo::findOrFail($id);

    // 2. Toggle nilai is_visible
    $todo->is_visible = !$todo->is_visible;

    // 3. Simpan ke database
    $todo->save();

    // 4. Return response JSON
    return response()->json([
        'message' => 'Visibility updated',
        'is_visible' => $todo->is_visible
    ]);
}
}
