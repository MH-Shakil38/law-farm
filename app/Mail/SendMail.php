<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $view, $subject, $data, $type;

    public function __construct($view, $subject, $data, $type)
    {
        $this->view = $view;
        $this->subject = $subject;
        $this->data = $data;
        $this->type = $type;
    }

    public function build()
    {
        return $this->view($this->view)
                    ->subject($this->subject)
                    ->with([
                        'data' => $this->data,
                        'type' => $this->type,
                    ]);
    }
}
