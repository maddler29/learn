<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskFavoriteController extends Controller
{
    public function update(Request $request, $id) {
        $task = Task::find($id);
        // $task->favoriteは、データベースのカラム
        // $request->favoriteは、index.blade.phpのformのname属性
        $task->favorite = $request->favorite;
        $task->save();
        return redirect()->route('task.index');
    }
}
