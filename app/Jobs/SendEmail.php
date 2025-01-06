<?php
namespace App\Jobs;

use App\Mail\SendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $view;
    public $subject;
    public $data;
    public $type;

    public function __construct()
    {

    }

    public function handle()
    {
        // Mail::to(['maynuddinhsn@gmail.com'])->send(New SendMail('hello'));
    }
}
