<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HearingReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $hearingDate;

    public function __construct($hearingDate)
    {
        $this->hearingDate = $hearingDate;
    }

    public function build()
    {
        return $this->subject('Hearing Reminder')
                    ->view('emails.hearing_reminder')
                    ->with(['hearingDate' => $this->hearingDate]);
    }
}
