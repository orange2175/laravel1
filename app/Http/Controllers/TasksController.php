<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;                                          //この行を追加

class TasksController extends Controller
{


    //ここから追加
    public function index()
    {
        $tasks = Task::get();
        return view('tasks.index', compact('tasks'));
    }
    //ここまで追加
    
    
}