<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate([
            
            'description' => 'required'
        ]);//returns an array

        $project->addTask($attributes);
        /* Task::create([
            'project_id' => $project->id,
            'description' => request('description')
        ]); */

        return back();
    }

    public function update(Task $task)
    {
      /*   $method = request()->has('completed') ? 'complete' : 'incomplete';

        $task->$method(); */

        request()->has('completed') ? $task->complete() : $task->incomplete();

        return back();
    }
}
