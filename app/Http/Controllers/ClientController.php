<?php

namespace App\Http\Controllers;

use App\Http\Requests\client\StoreRequest;
use App\Http\Requests\client\UpdateRequest;
use App\Models\CaseType;
use App\Models\Client;
use App\Models\ClientFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['caseTypes'] = CaseType::getAll();
        $data['clients'] = Client::getAll(true);
        if ($request->ajax()) {
            $view = view('admin.client.ajax-client')->with($data)->render();
            $pagination = view('admin.component.paginate',['paginator'=>$data['clients']])->render();
            return response()->json([
                'clients' => $view,
                'pagination' => $pagination
            ]);
        }
        return view('admin.client.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['caseTypes'] = CaseType::getAll();
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
            if($request->hasFile('image')){
                $data['image'] = $this->uploadImage($request->file('image'), 'client/image/');
            }
            Client::query()->create($data);
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
        $data['client'] = $client;
        return view('admin.client.details')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $data['caseTypes'] = CaseType::getAll();
        $data['client'] = $client;
        return view('admin.client.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Client $client)
    {
        try{
            DB::beginTransaction();
            $data = $request->validated();
            if($request->hasFile('image')){
                $data['image'] = $this->uploadImage($request->file('image'), 'client/image/');
            }
            $client->update($data);
            DB::commit();
            return redirect()->route('clients.index')->with('success','Successfully Client Updated');
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
            $data = $request->all();
            if($request->hasFile('file')){
                $data['file'] = $this->uploadImage($request->file('file'), 'client/file/');
            }
            $data['title'] = $request->title;
             $data['client_id'] = $request->client_id;
            ClientFile::query()->create($data);
            DB::commit();
            return redirect()->back()->with('success','Successfully File Uploaded');
        }catch(\Throwable $e){
                DB::rollBack();
                $this->errorDD($e);
                return redirect()->back()->with('error','Error Client Created',$e);
            }
    }

}
