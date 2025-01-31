<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SecurityService
{
    /**
     * check valid ip address when login
     * when login, check ip address is valid or not
     * ip address assing when user login
     */
    static function checkValidIp()
    {
        $ip =  file_get_contents('https://api.ipify.org');
        $user = User::query()->where('email', request()->email)->first();
        if ($user->hasRole('Super Admin')) {
            return true;
        } else {
            if ($user->ip == $ip || $user->ip1 == $ip) {
                return true;
            } else {
                return true;
            }
        }
    }

    /**
     * update user when login
     * for User activities and whice user stay in online and current activities
     */
    static function LoginUpdate()
    {
        $old = User::query()->findOrFail(Auth::user()->id);
        $new = Auth::user()->update(['isOnline' => 'online', 'last_logedin' => now()]);
        $new = User::query()->findOrFail(Auth::user()->id);
        $data = activity_data(' Login at ' . Carbon::parse(now())->format('d M y h:m A'),null,'#','Login');
        $store = ActivityLogService::LogInfo($data);
        return true;
    }


    /**
     * update user when Logout
     * for User activities and whice user stay in online and current activities
     */
    static function LogoutUpdate()
    {
        $old = User::query()->findOrFail(Auth::user()->id);
        $new = Auth::user()->update(['isOnline' => 'offline', 'last_activity' => now()]);
        $new = User::query()->findOrFail(Auth::user()->id);
        $data = activity_data(' Login at ' . Carbon::parse(now())->format('d M y h:m A'),null,'#','Login');
        $store = ActivityLogService::LogInfo($data);
        return true;
    }

    /**
     * the function create for last activities time track
     */
    static function lastActivities(){
        Auth::user()->update(['last_activity' => Carbon::now()]);
        return true;
    }


}
