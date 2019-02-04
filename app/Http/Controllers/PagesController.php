<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
   public function home(){
      
      $tasks = [
         'run',
         'code',
         'sleep'
      ];
      $foo = 'now, wha?';
      return view('welcome')->withTasks($tasks)->withFoo($foo);
   }

   public function about()
   {
      return view('about');
   }

   public function contact()
   {
      return view('contact');
   }
}
