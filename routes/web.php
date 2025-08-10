<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);

Route::post('/tasks', [TaskController::class, 'addTask']);
Route::get('/tasks', [TaskController::class, 'getAllTasks']);
Route::get('/tasks/{id}', [TaskController::class, 'getTask']);
Route::put('/tasks/{id}', [TaskController::class, 'updateTask']);
Route::delete('/tasks/{id}', [TaskController::class, 'deleteTask']);

//Route::get('/tasks/restore/{id}', [TaskController::class, 'restoreTask']);
