<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskStatusController extends Controller
{
    public function update(Request $request, $id){
        $task = Task::find($id);
        $task->status = $request->status;
        $task->save();
        return redirect()->route('task.index');
    }
}
