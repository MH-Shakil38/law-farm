<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $to; // Pass data to the view
    public $subject; // Pass data to the view
    public $data; // Pass data to the view
    public $view; // Pass data to the view
    public $type; // Pass data to the view

    public function __construct($view = null,$subject = 'send mail',$data = null, $type = null)
    {
        $this->data = $data;
        $this->subject = $subject;
        $this->view = $view;
        $this->type = $type;
    }

    public function build()
    {
        return $this->subject($this->subject)
                    ->view($this->view);
    }
}
