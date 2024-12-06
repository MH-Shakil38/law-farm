<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\CaseType;
use App\Models\Client;
use App\Models\ClientFile;
use App\Models\User;

class ClientService
{
    protected $controller;
    public function __construct()
    {
        return $this->controller = new Controller();
    }

    public function getAll($paginate = null)
    {
        $request = request();
        $user_id = auth()->user()->id;
        $query = Client::query();
        if (auth()->user()->user_type == 1 || auth()->user()->user_type == 2) {
            $query = $query;
        }else{
            $query = $query->where('lawyer_id', $user_id);
        }
        if ($request->has('search')) {
            $query = $this->search($query, $request->search);
        }

        $query = ($paginate ? $query->paginate($request->perPage ?? 15) : $query->get());
        return $query;
    }


    public function storeClient($data){
        $request = request();
        if($request->hasFile('image')){
            $data['image'] = $this->controller->uploadImage($request->file('image'), 'client/image/');
        }
       $store = Client::query()->create($data);
       ActivityLogService::LogInfo('Client',['action' => 'create','new' => $store,'description'=>'Create '.'Client , '.$store->name.' Information']);
       return $store;
    }

    public function updateClient($client){
        $request = request();
        $old_data = $client;
        $data = $request->all();
        if($request->hasFile('image')){
            $data['image'] = $this->controller->uploadImage($request->file('image'), 'client/image/');
        }
        $client->update($data);
        ActivityLogService::LogInfo('Client',['action' => 'Update','new' => $client,'old'=>$old_data,'description'=>'Update '.'Client , '.$client->name.' Information']);
        return $client;
    }

    public function search($query, $search)
    {
        return  $query->where('name', 'like', '%' . $search . '%')
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
            ->orWhere('image', 'like', '%' . $search . '%');
    }


    public function ajaxClientInfo($data){
        $view = view('admin.client.ajax-client')->with($data)->render();
        $pagination = view('admin.component.paginate',['paginator'=>$data['clients']])->render();
        return [
            'clients' => $view,
            'pagination' => $pagination
        ];
    }


    public function fileStore(){
        $request = request();
        $data = $request->only('date','file','title','client_id');
        if($request->hasFile('file')){
            $data['file'] = $this->controller->uploadImage($request->file('file'), 'client/file/');
        }
        $data['title'] = $request->title;
        $data['client_id'] = $request->client_id;
        ClientFile::query()->create($data);
    }


    public function getClient($client){
        $data['caseTypes'] = CaseType::getAll();
        $data['client'] = $client;
        $data['lawyers'] = User::query()->where('user_type',3)->get();
        ActivityLogService::LogInfo('Client',['action' => 'Show','description'=>'Show '.'Client , '.$client->name.' Information']);
        return $data;
    }
}
