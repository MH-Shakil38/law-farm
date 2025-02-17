<?php

use App\Models\CaseType;
use App\Models\Client;
use App\Models\EmailSetup;
use App\Models\Lawyer;
use App\Models\TmpClient;
use Illuminate\Support\Facades\Cache;
use App\Models\User;
use App\Services\AppService;
use App\Services\ClientService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;

if (!function_exists("clients")) {
    function clients()
    {
        return Client::query()->latest()->get();
    }
}

if (!function_exists("lawyers")) {
    function lawyers()
    {
        return Lawyer::query()->get();
    }
}


if (!function_exists("entry_list")) {
    function entry_list()
    {
        return TmpClient::query()->get();
    }
}

if (!function_exists("caseTypes")) {
    function caseTypes()
    {
        return CaseType::query()->get();
    }
}

if (!function_exists("check_activities")) {
    function check_activities($user)
    {
        $lastActivity = $user->last_activity;
        $lastActivityTime = Carbon::parse($lastActivity);

        // Calculate time difference in minutes
        $minutesDifference = $lastActivityTime->diffInMinutes(now());

        // Check conditions
        if (
            $lastActivityTime->isToday() && // Check if the last activity is today
            $minutesDifference <= 15 &&
            $user->last_activity != null &&
            $user->isOnline == 'online'
        ) {
            return 'status-online';
        } else {
            return 'status-away';
        }
    }
}


if (!function_exists("publicIp")) {
    function publicIp()
    {
        return file_get_contents('https://api.ipify.org');
    }
}




if (!function_exists("activeuser")) {
    function activeuser()
    {
        return User::query()->orderBy('last_activity', 'DESC')->get();
    }
}

if (!function_exists("dateSeperate")) {
    function dateSeperate($dateRange)
    {
        $data = [];
        $data = explode(' to ', $dateRange);
        $fromDateTime = DateTime::createFromFormat('d/m/Y', $data[0])->format('Y-m-d');
        $toDateTime = isset($data[1]) && $data[1] != null ? DateTime::createFromFormat('d/m/Y', $data[1])->format('Y-m-d') : DateTime::createFromFormat('d/m/Y', $data[0])->format('Y-m-d');

        return [
            'from' => $fromDateTime,
            'to' => $toDateTime
        ];
    }
}


function cache_duration()
{

    return 60 * 60 * 24 * 30 * 12;
}


if (!function_exists("getDateTimeLeft")) {
    function getDateTimeLeft($date)
    {
        // Parse the given date
        $givenTime = Carbon::parse($date);

        // Get the current time
        $currentTime = Carbon::now();

        // Debugging step: Check the difference in seconds
        $diffInSeconds = $givenTime->diffInSeconds($currentTime);

        // Output the raw difference for debugging
        if ($diffInSeconds <= 60) {
            return "$diffInSeconds seconds ago"; // Shows exact seconds if within a minute
        }

        // Otherwise, calculate the human-readable difference
        $timeDifference = $givenTime->diffForHumans($currentTime, [
            'parts' => 2,
            'syntax' => Carbon::DIFF_RELATIVE_TO_NOW,
        ]);

        return $timeDifference;
    }
}

if(!function_exists('change_value')){
        function change_value($old, $new){
        // Decode the new and old properties JSON
        $newProperties = json_decode($new, true);
        $oldProperties = json_decode($old, true); // Assuming old_properties exist

        $changedProperties = [];

        if ($newProperties) {
            foreach ($newProperties as $key => $newValue) {
                $oldValue = $oldProperties[$key] ?? null; // Get the old value for comparison
                $hasChanged = $oldValue != $newValue; // Check if the value has changed

                // Add only the changed properties
                if ($hasChanged) {
                    if (is_array($newValue) || is_object($newValue)) {
                        $changedProperties[$key] = json_encode($newValue, JSON_PRETTY_PRINT);
                    } elseif ($key == 'updated_at' || $key == 'created_at') {
                        $changedProperties[$key] = \Carbon\Carbon::parse($newValue)->format('Y-m-d H:i:s');
                    } else {
                        $changedProperties[$key] = $newValue ?? 'N/A';
                    }
                }
            }
        }
        $user =  Auth::user();
        return $changedProperties;
    }
}


if (!function_exists("notifications")) {
    function notifications()
    {
        return auth()->user()->notifications()->whereNull('read_at')->get();
    }
}

if(!function_exists('activity_data')){
    function activity_data($title = null, $data = null,$url = null,$action = null){
            $data =  [
                'url' =>$url ?? request()->fullUrl(),
                'properties' =>$data,
                'title' =>$title,
                'action' =>$action,
            ];
            return json_encode($data);
    }

    if(!function_exists('notify_email')){
        function notify_email(){
               $email = EmailSetup::query()->where('status',1)->pluck('email')->toArray();
               if($email !=null){
                return $email;
               }else{
                return [];
               }
        }
    }

    if(!function_exists('power_check')){
        function power_check(){
               $power = auth()->user()->hasPermission();
               return $power;
        }
    }

    if(!function_exists('dateFormat')){
        function dateFormat($date){
              return Carbon::parse($date)->format('d M y');
        }
    }

    if(!function_exists('power')){
        function power(){
            if(auth()->user()->hasRole('Super Admin')){
                return true;
            }else{
                return false;
            }
        }
    }

    if(!function_exists('users')){
        function users(){
            return User::query()->get();
        }
    }

    if(!function_exists('get_super_admin')){
        function get_super_admin(){
            $users = User::query()
            ->select('users.*')
            ->rightJoin('user_role','users.id','=','user_role.user_id')
            ->join('roles','user_role.role_id','=','roles.id')
            ->where('roles.id',AppService::SUPER_ADMIN)
            ->get();
            return $users;
        }
    }

    if (!function_exists('clients')) {
        function clients()
        {
            $clientService = new ClientService();
            return $clientService->getAll(false);
        }
    }

    if(!function_exists('get_ip')){
        function get_ip(){
            $ip =  file_get_contents('https://api.ipify.org');
            if (!$ip) {
                $ip = request()->ip();
            }
            return $ip;
        }
    }


}
