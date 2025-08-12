<?php

use App\Http\Controllers\Task\CreateController;
use App\Http\Controllers\Task\DestroyController;
use App\Http\Controllers\Task\EditController;
use App\Http\Controllers\Task\IndexController;
use App\Http\Controllers\Task\ShowController;
use App\Http\Controllers\Task\StoreController;
use App\Http\Controllers\Task\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/tasks', [IndexController::class, '__invoke'])->name('task.index');
Route::get('/tasks/create', [CreateController::class, '__invoke'])->name('task.create');
Route::post('/tasks', [StoreController::class, '__invoke'])->name('task.store');
Route::get('/tasks/{task}', [ShowController::class, '__invoke'])->name('task.show');
Route::put('/tasks/{task}', [UpdateController::class, '__invoke'])->name('task.update');
Route::get('/tasks/{task}/edit', [EditController::class, '__invoke'])->name('task.edit');
Route::delete('/tasks/{task}', [DestroyController::class, '__invoke'])->name('task.destroy');

