@extends('layout')

@section('content')

      <h1 class="title">Create a Project</h1>

      <div class="content">
         
         <form action="/projects" method="POST">
            {{ csrf_field() }}

            <div class="field">
               <div class="control">
                  <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Project Title" value="{{ old('title') }}" required>
               </div>
            </div>
            
            <div class="field">
               <div class="control">
                  <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="Project Description" required>{{ old('description') }}</textarea>
               </div>
            </div>
            
            <button class="button is-submit" type="submit">Create Project</button>
         </form>

      </div>

      @include('errors')

@endsection
