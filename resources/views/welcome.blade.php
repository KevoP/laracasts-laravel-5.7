@extends('layout')

@section('content')
   <h2>This is the homepage content</h2>
   
   <h3>{{ $foo }}</h3>

   <ul id="tasks">
      @foreach($tasks as $task)
         <li>{{ $task }}</li>
      @endforeach
   </ul>

@endsection