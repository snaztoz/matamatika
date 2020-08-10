<?php

namespace App\Listeners;

use App\Mail\MentoringUpdate;
use App\Events\NewMentoringMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NewEmailSend
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
     * @param  NewMentoringMail  $event
     * @return void
     */
    public function handle(NewMentoringMail $event)
    {
        $mail = $event->mentoring->mails()->latest()->first();
        
        /* Kirim email ke setiap peserta yang tergabung ke dalam
         * kegiatan mentoring terkait.
         */   
        foreach ($event->mentoring->users->all() as $participant) {
            Mail::to($participant)->queue(new MentoringUpdate($mail));
        }
    }
}
