<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        $category = new Category();
        $category->category = $request->category;
        $category->save();
        return redirect()->route('task.index');
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('category.edit',compact('category'));
    }

    public function update(Request $request,$id) {
        $category = Category::find($id);
        $category->category = $request->category;
        $category->save();
        return redirect()->route('task.index');
    }

    public function delete($id) {
        $category = Category::with('tasks')->where('id', $id)->first();
        foreach ($category->tasks as $task) {
            $task->delete();
        }
        $category->delete();
        return redirect()->route('task.index');
    }
}
