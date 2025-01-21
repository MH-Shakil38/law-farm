<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\CaseType;
use App\Models\Client;
use App\Models\User;
use Carbon\Carbon;

class AppService
{
    protected $controller;
    protected $clientService;
    public function __construct(ClientService $clientService)
    {
        $this->controller    = new Controller();
        $this->clientService = $clientService;
    }

    public static function changeStatus(){
        $request = request();
        $model = 'App\Models\\' . $request->model;
        $record = $model::query()->findOrFail($request->id);
        $record->update(['status'=>$record->status == 1 ? 0 : 1]);
        // ActivityLogService::LogInfo($request->model,['description','Deleted '.$request->model.' Table Record ID No-'.$record->id]);
        return true;
    }

    public static function delete(){
        $request = request();
        $model = 'App\Models\\' . $request->model;
        $record = $model::query()->findOrFail($request->id);
        ActivityLogService::LogInfo($request->model,['description','Deleted '.$request->model.' Table Record ID No-'.$record->id]);
        $record->delete();
        return true;
    }

    public static function dashboardData(){
        $clientService = new ClientService();
        $data['todayClient'] = Client::query()->whereDate('created_at',today())->get();
        $data['todayCase'] = Client::query()->whereDate('hearing_date',today())->get();
        $data['tomorrowCase'] = Client::query()->whereDate('hearing_date',Carbon::tomorrow()->toDateString())->get();
        $data['caseTypes'] = CaseType::getAll();
        $data['clients'] = $clientService->getAll(true);
        $data['onlineUsers'] = User::query()->get();
        // $log_data = activity_data(auth()->user()->name.' Dashboard Inforamtion');
        // ActivityLogService::LogInfo($log_data);
        return $data;
    }

    public static function logs(){
        $request = request();
        $logService = new ActivityLogService();
        $data['logs'] = $logService->getLog(false);
        if ($request->ajax()) {
            $data = $logService->ajaxClientInfo($data);
            return response()->json($data);
        }
        return $data;
    }

    public static function aproveTmpToClientModel($client){
        $store = Client::query()->create([
            'name' => $client->name,
            'first_name' => $client->first_name,
            'last_name' => $client->last_name,
            'email' => $client->email,
            'phone' => $client->phone,
            'address' => $client->address,
            'case_type' => $client->case_type,
            'city' => $client->city,
            'state' => $client->state,
            'zip_code' => $client->zip_code,
            'case_details' => $client->case_details,
            'date_of_birth' => $client->date_of_birth,
            'image' => $client->image,
            'direction' => $client->direction,
            'gender' => $client->gender,
            'marrital_status' => $client->marrital_status,
            'status' => 1,
        ]);
        return $store;
    }
}
