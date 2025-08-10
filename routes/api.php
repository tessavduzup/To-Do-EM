<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::post('/tasks', [TaskController::class, 'addTask']);
Route::get('/tasks', [TaskController::class, 'getAllTasks']);
Route::get('/tasks/{id}', [TaskController::class, 'getTask']);
Route::put('/tasks/{id}', [TaskController::class, 'updateTask']);
Route::delete('/tasks/{id}', [TaskController::class, 'deleteTask']);
