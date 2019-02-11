@extends('layout')

@section('content')

      <h1>{{ $project->title }}</h1>

      <div class="content">
         {{ $project->description }}
      </div>

      @if(count($project->tasks))
         <div class="content">
            
            <ul>
               @foreach($project->tasks as $task)
                  <li>
                     
                     <form action="/tasks/{{ $task->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                     
                        <label for="completed" class="checkbox {{ $task->completed ? 'is-complete': '' }}">
                           <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked': '' }}>
                           {{ $task->description }}
                        </label>
                     
                     </form>

                  </li>
               @endforeach
            </ul>

         </div>
      @endif

      <a href="/projects/{{ $project->id }}/edit" class="button is-info">Edit</a>

@endsection      