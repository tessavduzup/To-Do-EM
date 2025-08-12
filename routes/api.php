<?php

use App\Http\Controllers\Task\CreateController;
use App\Http\Controllers\Task\DestroyController;
use App\Http\Controllers\Task\EditController;
use App\Http\Controllers\Task\IndexController;
use App\Http\Controllers\Task\ShowController;
use App\Http\Controllers\Task\StoreController;
use App\Http\Controllers\Task\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/tasks', [IndexController::class]);
Route::get('/tasks/create', [CreateController::class]);
Route::post('/tasks', [StoreController::class]);
Route::get('/tasks/{task}', [ShowController::class]);
Route::put('/tasks/{task}', [UpdateController::class]);
Route::get('/tasks/{task}/edit', [EditController::class]);
Route::delete('/tasks/{task}', [DestroyController::class]);
