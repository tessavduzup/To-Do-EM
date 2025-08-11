<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Task;

class TaskController extends Controller
{
    function index()
    {
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    function create()
    {
        return view('task.create');
    }

    function store(StoreRequest $request)
    {
        $data = $request->validated();
        Task::create($data);
        return redirect()->route('task.index');
    }

    function show(Task $task)
    {
        return view('task.show', compact('task'));
    }

    function edit(Task $task)
    {
        return view('task.edit', compact('task'));
    }

    function update(UpdateRequest $request, Task $task)
    {
        $data = $request->validated();

        $task->update($data);
        return redirect()->route('task.show', compact('task'));
    }

    function destroy(Task $task)
    {
        $task->update(['status' => 'deleted']);
        $task->delete();
        return redirect()->route('task.index');
    }
}
