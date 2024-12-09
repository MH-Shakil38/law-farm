<?php

use App\Models\CaseType;
use App\Models\Client;
use Illuminate\Support\Facades\Cache;
use App\Models\User;
use Carbon\Carbon;

if (!function_exists("clients")) {
    function clients()
    {
        return Client::query()->latest()->get();
    }
}

if (!function_exists("lawyers")) {
    function lawyers()
    {
        return User::query()->where('user_type', 3)->get();
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
