<?php

namespace App\Http\Controllers;

use App\Http\Requests\client\StoreRequest;
use App\Http\Requests\client\UpdateRequest;
use App\Models\CaseType;
use App\Models\Client;
use App\Models\ClientFile;
use App\Models\User;
use App\Services\ActivityLogService;
use App\Services\CaseService;
use App\Services\ClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $clientService;
    protected $caseService;
    public function __construct(ClientService $clientService,CaseService $caseService){
         $this->clientService = $clientService;
         $this->caseService = $caseService;
         return $this;
    }
    public function index(Request $request)
    {
        $data['caseTypes'] = $this->caseService->getCaseType();
        $data['clients'] = $this->clientService->getAll(true);
        ActivityLogService::LogInfo('Client');
        if ($request->ajax()) {
            $data = $this->clientService->ajaxClientInfo($data);
            return response()->json($data);
        }
        return view('admin.client.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['caseTypes'] = $this->caseService->getCaseType();
        return view('admin.client.craete')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try{
            DB::beginTransaction();
            $data = $request->validated();
            $this->clientService->storeClient($data);
            DB::commit();
            return redirect()->back()->with('success','Successfully Client Created');
        }catch(\Throwable $e){
            DB::rollBack();
            return redirect()->back()->with('error','Error Client Created',$e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
       $data = $this->clientService->getClient($client);
        return view('admin.client.details')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $data = $this->clientService->getClient($client);
        return view('admin.client.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Client $client)
    {
        try{
            DB::beginTransaction();
            $this->clientService->updateClient($client);
            DB::commit();
            return redirect()->back()->with('success','Successfully Client Updated');
        }catch(\Throwable $e){
            DB::rollBack();
            $this->errorDD($e);
            return redirect()->back()->with('error','Error Client Created',$e);
        }
    }

    public function fileStore(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx,jpg,jpeg',
        ]);
        try{
            DB::beginTransaction();
            $this->clientService->fileStore();
            DB::commit();
            return redirect()->back()->with('success','Successfully File Uploaded');
        }catch(\Throwable $e){
                DB::rollBack();
                $this->errorDD($e);
                return redirect()->back()->with('error','Error Client Created',$e);
            }
    }

}
