<?php

namespace App\Providers;

use App\Providers\RegisteredUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailToUser
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
     * @param  RegisteredUser  $event
     * @return void
     */
    public function handle(RegisteredUser $event)
    {

    }
}
