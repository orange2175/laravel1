<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::get();
        return view('tasks.index', compact('tasks'));
    }


    //ここから追加
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }
    //ここまで追加
    
    
}