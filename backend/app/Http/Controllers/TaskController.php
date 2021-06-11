<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index() {
        // // データベースのデータをまとめて取り出すall()
        $tasks = task::all();
        // 変数tasksをkeyとしてviewのforeachにデータを渡している
        return view('task.index',['tasks' => $tasks]);
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
