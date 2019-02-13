@extends('layout')

@section('content')

      <h1 class="title">{{ $project->title }}</h1>

      <div class="content box">
         {{ $project->description }}

         @if(count($project->tasks))
            <div class="content">
               
               <ul>
                  @foreach($project->tasks as $task)
                     <li>
                        
                        <form action="/completed-tasks/{{ $task->id }}" method="POST">
                           @if($task->completed)
                              @method('DELETE')
                           @endif
                           @csrf
                        
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

         <p>
            <a href="/projects/{{ $project->id }}/edit" class="button is-info">Edit</a>
         </p>

      </div>

      <form method="POST" action="/projects/{{ $project->id }}/task" class="box">
         @csrf
         <div class="field">
            <label for="" class="label">New Task</label>
            <div class="control">
               <input type="text" class="input" name="description" placeholder="New Task" required>
            </div>
         </div>
         
         <div class="field">
            <div class="control">
               <button type="submit" class="button is-link">Add Task</button>
            </div>
         </div>

      </form>

      @include('errors')

    </div>
@endsection      