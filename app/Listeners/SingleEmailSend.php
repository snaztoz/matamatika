<?php

namespace App\Listeners;

use App\Mail\MentoringUpdate;
use App\Events\NewUserRegisterMentoring;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SingleEmailSend
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
     * @param  NewUserRegisterMentoring  $event
     * @return void
     */
    public function handle(NewUserRegisterMentoring $event)
    {
        /* Dimungkinkan ketika user mendaftar, belum terdapat
         * email yang ditulis oleh admin
         */
        if ($event->mentoring->mails->count() != 0) {
            $mail = $event->mentoring->mails()->latest()->first();
            Mail::to($event->user)->send(new MentoringUpdate($mail));
        }
    }
}
