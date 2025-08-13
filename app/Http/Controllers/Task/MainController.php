<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class MainController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        return redirect()->route('task.index');
    }
}
