<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email,$view, $subject, $data, $type;

    public function __construct($email,$view, $subject, $data, $type)
    {
        $this->email = $email;
        $this->view = $view;
        $this->subject = $subject;
        $this->data = $data;
        $this->type = $type;
    }

    public function handle()
    {
        Mail::to($this->email)->queue(new SendMail($this->view, $this->subject, $this->data, $this->type));
    }
}
