@extends('layout')

@section('content')

      <h1>Create a Project</h1>

      <form action="/projects" method="POST">
         {{ csrf_field() }}

         <div class="field">
            <div class="control">
               <input class="input" type="text" name="title" placeholder="Project Title">
            </div>
         </div>
         
         <div class="field">
            <div class="control">
               <textarea class="textarea" name="description" placeholder="Project Description"></textarea>
            </div>
         </div>
         
         <button class="button is-submit" type="submit">Create Project</button>
      </form>

      @include('errors')

@endsection
