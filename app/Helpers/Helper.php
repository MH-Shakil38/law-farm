<?php

use App\Models\CaseType;
use App\Models\Client;
use Illuminate\Support\Facades\Cache;
use App\Models\User;


if (!function_exists("clients")) {
    function clients()
    {
       return Client::query()->latest()->get();
    }
}

if (!function_exists("lawyers")) {
    function lawyers()
    {
       return User::query()->where('user_type',3)->get();
    }
}

if (!function_exists("caseTypes")) {
    function caseTypes()
    {
       return CaseType::query()->get();
    }
}

function cache_duration()
{

    return 60 * 60 * 24 * 30 * 12;
}

