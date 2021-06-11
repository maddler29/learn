<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index() {
        return view('task.index');
    }

    public function create() {
        return view('task.create');
    }

    public  function store(Request $request) {
        // taskを登録する
        $task = new Task();
        $task->task = $request->task;
        $task->save();
        return redirect()->route('task.index', ['id' => $task->id]);
    }
}
