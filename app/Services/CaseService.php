<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\CaseType;
use App\Models\Client;

class CaseService
{
    protected $controller;
    public function __construct()
    {
        return $this->controller = new Controller();
    }

    public function getCaseType(){
        return CaseType::all();
    }

}
