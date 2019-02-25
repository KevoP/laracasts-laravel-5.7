@component('mail::message')
# Introduction

Hey, a new project was created.

Project title: {{ $project->title }}

Description: {{ $project->description }}

@component('mail::button', ['url' => url('projects/' . $project->id)])
View Project
@endcomponent


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
