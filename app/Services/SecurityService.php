<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SecurityService
{
    static function checkValidIp()
    {
        $ip =  file_get_contents('https://api.ipify.org');
        $user = User::query()->where('email', request()->email)->first();
        if ($user->user_type == 1) {
            return true;
        } else {
            if ($user->ip == $ip) {
                return true;
            } else {
                return false;
            }
        }
    }

    static function LoginUpdate()
    {
        Auth::user()->update(['isOnline' => 'online', 'last_logedin' => now()]);
    }

    static function LogoutUpdate()
    {
        Auth::user()->update(['isOnline' => 'offline', 'last_activity' => now()]);
    }

    static function lastActivities(){
        Auth::user()->update(['last_activity' => now()]);
    }


}
