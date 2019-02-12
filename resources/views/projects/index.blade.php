@extends('layout')

@section('content')
      
      <h1 class="title">Projects</h1>

      <div class="content">
         <ul>
            @foreach($projects as $project)
               <li>
                  <a href="/projects/{{ $project->id }}">
                     <?= $project->title; ?>
                  </a> - <a href="/projects/{{ $project->id }}/edit">Edit</a>
               </li>
            @endforeach
         </ul>
      </div>

      <a href="/projects/create" class="button is-info">New Project</a>
@endsection