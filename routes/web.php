<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ DashboardController::class, 'view' ]);

Route::post('/item', [ ItemController::class, 'insert' ]);
Route::delete('/item/{id}', [ ItemController::class, 'delete' ])->name('item.destroy');
Route::patch('/todos/{id}/toggle-visibility', [TodoController::class, 'toggleVisibility']);

Route::patch('/todos/{id}/toggle-visibility', [TodoController::class, 'toggleVisibility']);