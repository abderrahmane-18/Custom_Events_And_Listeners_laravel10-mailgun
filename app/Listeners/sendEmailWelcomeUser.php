<?php

namespace App\Listeners;

use App\Events\welcomeUser;
use App\Mail\welcomeUser as MailWelcomeUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class sendEmailWelcomeUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(welcomeUser $event): void
    {
        //
        Mail::to($event->user->email)->send(new MailWelcomeUser($event->user));
    }
}
