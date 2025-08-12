<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;

class DestroyController extends Controller
{
    public function __invoke(Task $task)
    {
        $task->update(['status' => 'deleted']);
        $task->delete();
        return redirect()->route('task.index');
    }
}
