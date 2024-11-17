<?php

namespace App\Http\Controllers;

use App\Http\Requests\client\StoreRequest;
use App\Models\CaseType;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['caseTypes'] = CaseType::getAll();
        $data['clients'] = Client::getAll();
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
            $data['created_by'] = auth()->user()->id;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
