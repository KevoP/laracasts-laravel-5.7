<?php

namespace App;

use App\Events\ProjectPublished;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
   protected $guarded = [];

   protected $dispatchesEvents = [
      'created' => ProjectPublished::class
   ];

   public function owner()
   {
        return $this->belongsTo(User::class);
   }

   public function tasks()
   {
      return $this->hasMany(Task::class);
   }

   public function addTask($task)
   {
      return $this->tasks()->create($task);
   }
}
