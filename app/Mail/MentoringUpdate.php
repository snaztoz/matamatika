<?php

namespace App\Mail;

use App\MentoringMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MentoringUpdate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Kegiatan mentoring terkait yang akan dikirimkan email.
     */
    public $mentoring_mail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(MentoringMail $mail)
    {
        $this->mentoring_mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.mentoring_update')
                    ->text('mails.mentoring_update_plain');
    }
}
