<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        // taskをcategoryと一緒にすべて取得
        $tasks = task::with('category')->get();

        $categories = Category::all();

        // 変数tasksをkeyとしてviewのforeachにデータを渡している
        return view('task.index', [
            'tasks' => $tasks,
            'categories' => $categories
        ]);
    }

    public function create()
    {
        // カテゴリの全データをcategoryキーとしてデータを渡している
        $category = Category::all();
        return view('task.create', ['category' => $category]);
    }

    public function store(Request $request)
    {
        // taskを登録する
        $task = new Task();
        $task->task = $request->task;

        // categoryを登録する
        $task->category_id = $request->category_id;

        $task->save();
        return redirect()->route('task.index', ['id' => $task->id]);
    }

    public function edit(Request $request, $id)
    {
        // findメソッドでid変数に指定したデータを取り出す
        // 一覧でクリックしたIDを受け取ってtaskテーブルを検索し、その内容を表示する。
        $task = Task::find($id);
        $categories = Category::all();
        return view('task.edit', compact('task', 'categories'));

    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->category_id = $request->category_id;
        $task->task = $request->task;
        $task->save();

        return redirect()->route('task.index', ['id' => $task->id]);
    }


    public function delete(Request $request, $id)
    {
        // findメソッドでid変数で指定したデータを取り出す
        $task = Task::find($id);
        // 削除機能追加
        $task->delete();
        return redirect()->route('task.index');
    }
}
