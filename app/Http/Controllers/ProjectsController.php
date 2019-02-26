<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Events\ProjectPublished;

class ProjectsController extends Controller
{
   
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index()
   {
      // $projects = Project::where('owner_id', auth()->id())->get();
      return view('projects.index', [
         'projects'  => auth()->user()->projects
      ]);
   }

   public function create(){
      $guarded = [];
      return view('projects.create');
   }

   public function show(Project $project){
      // $this->authorize('view', $project);
      return view('projects.show', compact('project'));
   }

   public function store(Request $request)
   {
      $validated = request()->validate([
         'title'        => ['required','min:10'],
         'description'  => ['required', 'min:10'],
      ]);

      $validated['owner_id'] = auth()->id();
      $project = Project::create($validated);

      return redirect('/projects');
   }

   public function edit(Project $project){
      // $this->authorize('view', $project);
      return view('projects.edit', compact('project'));
   }

   public function update(Project $project){
      // $this->authorize('view', $project);
      $validated = request()->validate([
         'title'        => ['required','min:10'],
         'description'  => ['required', 'min:10'],
      ]);
      $project->update($validated);
      return redirect('/projects');
   }

   public function destroy(Project $project){
      // $this->authorize('view', $project);
      $project->delete();
      return redirect('/projects');
   }
}
