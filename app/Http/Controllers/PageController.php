<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use App\Models\Comment;

class PageController extends Controller
{
    public function home()
    {
        $tasks = Task::latest()->paginate();

        return view('home', ["tasks" => $tasks]);
    }

    public function detail(Task $task)
    {
        $comments = Comment::where('task_id', $task->id)->orderBy('created_at')->get();

        return view('detail', ["task" => $task, "comments" => $comments]);
    }
}
