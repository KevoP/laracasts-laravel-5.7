<?php

namespace App\Listeners;

use App\Events\ProjectPublished;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\ProjectCreated;
use Illuminate\Support\Facades\Mail;

class SendProjectPublishedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProjectPublished  $event
     * @return void
     */
    public function handle(ProjectPublished $event)
    {
        Mail::to($event->project()->owner->email)->send(
            new ProjectCreated($event->project())
        );
    }
}
