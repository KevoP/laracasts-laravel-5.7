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

   public function show($id){
      //
   }

   public function store(Request $request)
   {
      $project = new Project();
      $project->title = request('title');
      $project->description = request('description');
      $project->save();

      return redirect('/projects');
   }

   public function edit($id){

      $project = Project::find($id);
      return view('projects.edit', $project);
   }

   public function update(Request $request, $id){
      //
   }

   public function destroy($id){
      //
   }
}
