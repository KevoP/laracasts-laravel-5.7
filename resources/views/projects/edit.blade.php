@extends('layout')

@section('content')
   <h1 class="title">Edit project</h1>

   <form method="POST" action="/projects/{{ $project->id }}">
      @csrf
      @method('PATCH')

      <div class="field">
         <label class="label" for=""></label>
         <div class="control">
            <input class="input" type="text" name="title" id="title" placeholder="Title" value="{{ $project->title }}">
         </div>
      </div>
      
      <div class="field">
         <label for=""></label>
         <div class="control">
            <textarea class="textarea" name="description" id="description" placeholder="Description">{{ $project->description }}</textarea>
         </div>
      </div>

      <button class="button is-info" type="submit">Update</button>
   </form>

   <form method="POST" action="/projects/{{ $project->id }}">
      @csrf
      @method('DELETE')
      <button class="button is-danger" type="submit">Delete</button>
   </form>
@endsection