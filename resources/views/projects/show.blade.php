@extends('layout')

@section('content')

    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
        
        <div>
            {{ $project->description }}
        </div>

        <a href="/projects/{{ $project->id }}/edit" class="button is-info">Edit</a>

    </div>
@endsection      