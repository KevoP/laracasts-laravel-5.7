<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
   
   public function index()
   {
      $projects = \App\Project::all();

      return view('projects.index', compact('projects'));
   }

   public function create(){
      return view('projects.create');
   }

   public function show(Project $project){
      //
   }

   public function store(Request $request)
   {
      Project::create(request(['title', 'description']));

      return redirect('/projects');
   }

   public function edit(Project $project){
      return view('projects.edit', compact('project'));
   }

   public function update(Project $project){
      $project->title = request('title');
      $project->description = request('description');

      $project->save();

      return redirect('/projects');
   }

   public function destroy(Project $project){
      $project->delete();
      return redirect('/projects');
   }
}
