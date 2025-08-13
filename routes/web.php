<?php

use App\Http\Controllers\Task\CreateController;
use App\Http\Controllers\Task\DestroyController;
use App\Http\Controllers\Task\EditController;
use App\Http\Controllers\Task\IndexController;
use App\Http\Controllers\Task\MainController;
use App\Http\Controllers\Task\ShowController;
use App\Http\Controllers\Task\StoreController;
use App\Http\Controllers\Task\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', MainController::class)->name('home');
Route::get('/tasks', IndexController::class)->name('task.index');
Route::get('/tasks/create', CreateController::class)->name('task.create');
Route::post('/tasks', StoreController::class)->name('task.store');
Route::get('/tasks/{task}', ShowController::class)->name('task.show');
Route::put('/tasks/{task}', UpdateController::class)->name('task.update');
Route::get('/tasks/{task}/edit', EditController::class)->name('task.edit');
Route::delete('/tasks/{task}', DestroyController::class)->name('task.destroy');

