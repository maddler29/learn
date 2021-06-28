<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index() {
        // データベースのデータをまとめて取り出すall()
        $tasks = task::all();
        $categories = Task::find(1)->categories;
        foreach ($categories as category) {
            //
        }
        // 変数tasksをkeyとしてviewのforeachにデータを渡している
        return view('task.index',['tasks' => $tasks]);
    }

    public function create() {
        return view('task.create');
    }

    public function store(Request $request) {
        // taskを登録する
        $task = new Task();
        $task->task = $request->task;

        // categoryを登録する
        $task->category_id = $request->category_id;

        $task->save();
        return redirect()->route('task.index', ['id' => $task->id]);
    }

    public function edit(Request $request,$id) {
         // findメソッドでid変数に指定したデータを取り出す
         // 一覧でクリックしたIDを受け取ってtaskテーブルを検索し、その内容を表示する。
        $task1 = Task::find($id);
        return view('task.edit',compact('task1'));

    }

    public function update(Request $request, $id, Task $task1) {
        $task1 = Task::find($id);
        $task1->task = $request->task;
        $task1->save();

        return redirect()->route('task.index', ['id' => $task1->id]);
    }



    public function delete(Request $request, $id, Task $task) {
        // findメソッドでid変数で指定したデータを取り出す
        $task = Task::find($id);
        // 削除機能追加
        $task->delete();
        return redirect()->route('task.index');
    }
}
