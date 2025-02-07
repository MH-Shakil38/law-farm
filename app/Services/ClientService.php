<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\CaseType;
use App\Models\Client;
use App\Models\ClientFile;
use App\Models\TmpClient;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

class ClientService
{
    protected $controller;
    protected $uploadService;
    public function __construct()
    {
        $this->controller = new Controller();
        $this->uploadService = new UploadService();
    }

    public function getAll($paginate = null)
    {
       $current_route = Route::currentRouteName();
        $request = request();
        $user_id = auth()->user()->id;
        $query = Client::query()->orderBy('id','DESC');
        if (power()) {
            $query = $query;
        } else {
            $query = $query->where('lawyer_id', $user_id);
        }

        if ($request->has('search')) {
            $query = $this->search($query, $request->search);
        }

        if ($request->hearing_date) {
            $data = dateSeperate($request->hearing_date);
            if($data['from'] == $data['to']){
                $query = $query->where('hearing_date','like','%'. $data['from'].'%');
            }else{
                $query = $query->whereBetween('hearing_date', [$data['from'], $data['to']]);
            }

        }
        // else{
        //     if($current_route == 'dashboard'){
        //         $date = Carbon::parse(now())->format('Y-m-d');
        //         $query = $query->whereDate('hearing_date',Carbon::parse(now())->format('Y-m-d'));
        //     }
        // }
        if ($request->created_at) {
            $data = dateSeperate($request->created_at);
            if($data['from'] == $data['to']){
                $query = $query->where('created_at','like','%'. $data['from'].'%');
            }else{
                $query = $query->whereBetween('created_at', [$data['from'], $data['to']]);
            }
        }
        $query = $query->orderBy('hearing_date', 'desc');
        $query = $query->whereNull('is_secrate');
        $query = ($paginate ? $query->paginate($request->perPage ?? 15) : $query->get());
        return $query;
    }


    public function storeClient($data)
    {
        $data['image'] = $this->uploadService->client_image();
        $data['first_name'] = $data['name'];
        $store = Client::query()->create($data);
        if(isset($store->lawyer->name)){
            $store->lawyer = $store->lawyer->name;
        }
        NotificationService::client_notification(null,$store,'Added');
        return $store;
    }

    public function updateClient($client)
    {
        $request = request();
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $this->controller->uploadImage($request->file('image'), 'client/image/');
        }
        $client->update($data);
        if(isset($client->lawyer->name)){
            $client->lawyer = $client->lawyer->name;
        }
        NotificationService::client_notification(null,$client,'Updated');
        // ActivityLogService::LogInfo('Client', ['action' => 'Update', 'new' => $client, 'old' => $old_data, 'description' => 'Update ' . 'Client , ' . $client->name . ' Information']);
        // NotificationService::client_store_notification($old_data,$client,'Update');
        return $client;
    }

    public function search($query, $search)
    {
        return $query->where(function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%')
                ->orWhere('city', 'like', '%' . $search . '%')
                ->orWhere('state', 'like', '%' . $search . '%')
                ->orWhere('zip_code', 'like', '%' . $search . '%')
                ->orWhere('country', 'like', '%' . $search . '%')
                ->orWhere('case_type', 'like', '%' . $search . '%')
                ->orWhere('case_number', 'like', '%' . $search . '%')
                ->orWhere('case_details', 'like', '%' . $search . '%')
                ->orWhere('short_details', 'like', '%' . $search . '%')
                ->orWhere('date_of_birth', 'like', '%' . $search . '%')
                ->orWhere('nationality', 'like', '%' . $search . '%')
                ->orWhere('passport_number', 'like', '%' . $search . '%')
                ->orWhere('status', 'like', '%' . $search . '%')
                ->orWhere('created_by', 'like', '%' . $search . '%')
                ->orWhere('updated_by', 'like', '%' . $search . '%')
                ->orWhere('image', 'like', '%' . $search . '%')
                ->orWhere('last_update', 'like', '%' . $search . '%');
        });

    }


    public function ajaxClientInfo($data)
    {
        $view = view('admin.client.ajax-client')->with($data)->render();
        $pagination = view('admin.component.paginate', ['paginator' => $data['clients']])->render();
        return [
            'clients' => $view,
            'pagination' => $pagination
        ];
    }


    public function fileStore()
    {
        $request = request();
        $data = $request->only('date', 'file', 'title', 'client_id');
        if ($request->hasFile('file')) {
            $data['file'] = $this->controller->uploadImage($request->file('file'), 'client/file/');
        }
        $data['title'] = $request->title;
        $data['client_id'] = $request->client_id;
        ClientFile::query()->create($data);
    }


    public function getClient($client)
    {
        $data['caseTypes'] = CaseType::getAll();
        $data['client'] = $client;
        $data['lawyers'] = User::query()->where('user_type', 3)->get();
        // ActivityLogService::LogInfo('Client', ['action' => 'Show', 'description' => 'Show ' . 'Client , ' . $client->name . ' Information']);
        return $data;
    }


    public static function tmp_client_store(){
        $request = request();
        $data = $request->all();
        $data['image'] = UploadService::client_image();
        $data['name'] = $request->first_name.' '.$request->last_name;
        $store =  TmpClient::query()->create($data);
        NotificationService::tmp_client_notification( null, $store,'Entry');
        return true;

    }
}
