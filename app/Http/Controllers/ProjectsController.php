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
      $guarded = [];
      return view('projects.create');
   }

   public function show(Project $project){
      return view('projects.show', compact('project'));
   }

   public function store(Request $request)
   {
      Project::create(request(
         ['title', 'description']
      ));

      return redirect('/projects');
   }

   public function edit(Project $project){
      return view('projects.edit', compact('project'));
   }

   public function update(Project $project){
      $project->update(request(['title', 'description']));
      return redirect('/projects');
   }

   public function destroy(Project $project){
      $project->delete();
      return redirect('/projects');
   }
}
