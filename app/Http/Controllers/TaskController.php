<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index() {
        return view('index');
    }

    function getAllTasks() {
        $tasks = Task::all();
        return json_decode($tasks);
    }

    function getTask($id) {
        $task = Task::where('id', $id)->first();
        return json_decode($task);
    }

    function addTask(Request $request) {
        $data = $request->validate([
           'title' => 'required|string',
           'description' => 'nullable|string',
           'status' => 'sometimes'
        ],
        [
            'title.required' => 'Введите название',
        ]);

        Task::create($data);

        return redirect('/tasks');
    }

    function updateTask(Request $request, $id) {
        $data = $request->validate([
            'title' => 'sometimes|string',
            'description' => 'sometimes|string'
        ]);

        $task = Task::where('id', $id)->first();
        $task->update($data);
        return redirect('/tasks');
    }

    function deleteTask($id) {
        $task = Task::where('id', $id)->first();
        $task->delete();
        return redirect('/tasks');
    }

//    function restoreTask($id) {
//        $task = Task::withTrashed()->where('id', $id)->first();
//        $task->restore();
//    }
}
