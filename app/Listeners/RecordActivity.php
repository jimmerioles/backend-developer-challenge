<?php

namespace App\Listeners;

use App\Activity;
use App\Events\UserSearched;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RecordActivity
{
    public $activity;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Activity $activity)
    {
        $this->activity = $activity;
    }

    /**
     * Handle the event.
     *
     * @param  UserSearched  $event
     * @return void
     */
    public function handle(UserSearched $event)
    {
        $this->activity->text = $event->text;
        $this->activity->user_id = $event->user->id;
        $this->activity->save();
    }
}
