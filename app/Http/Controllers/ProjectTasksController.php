<?php

namespace App\Http\Controllers;

use App\Task; 
use App\Project;

class ProjectTasksController extends Controller
{
   public function update(Task $task)
   {
      request()->has('completed') ? $task->complete() : $task->incomplete();
      return back();
   }

   public function store(Project $project)
   {
      $attributes = request()->validate(['description' => 'required|min:10']);

      $project->addTask($attributes);
      return back();
   }
}
