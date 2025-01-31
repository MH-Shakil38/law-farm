<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\TmpClient;
use App\Services\AppService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgreementController extends Controller
{
    protected $controller;
    public function __construct(Controller $controller)
    {
        $this->controller = $controller;
    }
    public function agreement($id){
        $client = TmpClient::query()->findOrFail($id);
        return view('admin.client.agreement',compact('client'));
    }

    public function agreementStore(Request $request){
        try{
            DB::beginTransaction();
            $client = TmpClient::query()->findOrFail($request->id);
            $new_client = AppService::aproveTmpToClientModel($client); //client store form tmp to client model
            $data = $request->all();
            $data['client_id'] = $new_client->id;
            if ($request->hasFile('client_signature')) {
                $data['client_signature'] = $this->controller->uploadImage($request->file('client_signature'), 'client/signature/');
            }
            Agreement::query()->create($data);
            // $client->delete();
            DB::commit();
            return redirect()->route('clients.show',$new_client->id)->with('successpully client Agreemented and Assign Client List');
        }catch(\Throwable $e){
            DB::rollBack();
            return redirect()->back()->with('error','Error Agreementing Client'.$e);
        }
    }
}
