<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\CaseType;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ActivityLogService
{
    protected $controller;
    public function __construct()
    {
        return $this->controller = new Controller();
    }

    /**
     * $data store in json formate
     * @param $data
     * $data = []
     */
    static function LogInfo($data = null)
    {
        // $store = ActivityLog::query()->create(['user_id'=>Auth::user()->id,'data'=>$data]);
        // return $store;
    }


    public function getLog($paginate = false)
    {

        $request    = request();
        $auth       = auth()->user();
        $query      = ActivityLog::query()->latest();

        if (isset($request->search) && $request->has('search')) {
            $query  = $this->search($query, $request->search);
        }
        $query      = $auth->user_type == 1 ? $query : $query->where('user_id',$auth->id);
        $query      = $request->user_id  ? $query->where('user_id',$request->user_id) : $query;

        $query      = ($paginate ? $query->paginate($request->perPage ?? 15) : $query->get());
        return $query;
    }

    public function ajaxClientInfo($data)
    {
        $view = view('admin.log.ajax-log')->with($data)->render();
        $pagination = view('admin.component.paginate', ['paginator' => $data['logs']])->render();
        return [
            'logs' => $view,
            'pagination' => $pagination
        ];
    }



    public function search($query, $search)
    {
        return  $query->where('user_name',      'like', '%' . $search . '%')
            ->orWhere('user_id',        'like', '%' . $search . '%')
            ->orWhere('description',    'like', '%' . $search . '%')
            ->orWhere('url',            'like', '%' . $search . '%');
    }
}
