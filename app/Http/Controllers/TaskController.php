<?php

namespace App\Http\Controllers;

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

    function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'description' => 'nullable|string'
        ],
            [
                'title.required' => 'Введите название',
            ]);
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

    function update(Task $task)
    {
        $data = request()->validate([
            'title' => 'sometimes|string',
            'description' => 'sometimes|string'
        ]);

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
