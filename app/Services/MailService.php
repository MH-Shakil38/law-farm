<?php

namespace App\Services;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use function PHPSTORM_META\type;

class MailService
{
    public static function LoginMail($data,$type) {
        $subject = $type.' '.$data->name;
        Mail::to(['maynuddinhsn@gmail.com','pemalaw5@gmail.com'])->send(New SendMail('emails.login-logout',$subject,$data,$type));
    }

    public static function LogoutMail($data,$type) {
        $subject = $type.' '.$data->name;
        Mail::to(['maynuddinhsn@gmail.com','pemalaw5@gmail.com'])->send(New SendMail('emails.login-logout',$subject,$data,$type));
    }
}
