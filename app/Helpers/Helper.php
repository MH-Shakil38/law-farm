<?php

use App\Models\Client;
use Illuminate\Support\Facades\Cache;


if (!function_exists("clients")) {
    function clients()
    {
       return Client::query()->latest()->get();
    }
}

function cache_duration()
{

    return 60 * 60 * 24 * 30 * 12;
}

