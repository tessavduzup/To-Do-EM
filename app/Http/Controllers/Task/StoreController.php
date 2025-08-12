<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Task;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Task::create($data);
        return redirect()->route('task.index');
    }
}
