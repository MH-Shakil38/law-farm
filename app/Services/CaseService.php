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

    public function caseTypeStore(){
        $request = request();
        $data['name'] = $request->name;
        $data['description'] = $request->description ?? '';
        $data['status'] = $request->status == 1 ? 1 : 0;
        $store = CaseType::create($data);
        ActivityLogService::LogInfo('CaseType', ['action' => 'create', 'new' => $store, 'description' => 'Create ' . 'Case Type , ' . $store->name ]);
        return $store;
    }


    public function caseTypeUpdate($caseType){
        $request = request();
        $old = CaseType::query()->findOrFail($caseType->id);
        $old = json_encode($old);
        $data['name'] = $request->name;
        $data['description'] = $request->description ?? '';
        $data['status'] = $request->status == 1 ? 1 : 0;
        $caseType->update($data);
        ActivityLogService::LogInfo('CaseType', ['action' => 'Update', 'new' => $caseType, 'old' => $old, 'description' => 'Update ' . 'Case , ' . $caseType->name . ' Information']);
        return $caseType;
    }

}
