<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Create a Project</title>
   </head>
   <body>
            
      <nav>
         <ul>
            <li><a href="/">home</a></li>
            <li><a href="/contact">contact</a></li>
            <li><a href="/about">about</a></li>
         </ul>
      </nav>

      <h1>Create a Project</h1>

      <form action="/projects" method="POST">
         {{ csrf_field() }}
         <div>
            <input type="text" name="title" placeholder="Project Title">
         </div>
         <div>
            <textarea name="description" placeholder="Project Description"></textarea>
         </div>
         <div>
            <button type="submit">Create Project</button>
         </div>
      </form>

   </body>
</html>
