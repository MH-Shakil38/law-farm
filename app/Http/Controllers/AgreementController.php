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
            $client = TmpClient::query()->findOrFail($request->client_id);
            $new_client = AppService::aproveTmpToClientModel($client); //client store form tmp to client model
            $data = $request->all();
            $data['client_id'] = $new_client->id;
            if ($request->hasFile('client_signature')) {
                $data['client_signature'] = $this->controller->uploadImage($request->file('client_signature'), 'client/signature/');
            }

            $store =  Agreement::query()->create($data);
            $client->delete();
            DB::commit();
            return redirect()->route('clients.show',$new_client->id)->with('successpully client Agreemented and Assign Client List');
        }catch(\Throwable $e){
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error','Error Agreementing Client'.$e);
        }
    }

    public function agreementUpdate(Request $request){
        try{
            DB::beginTransaction();
            $agrement = Agreement::query()->where('client_id',$request->client_id)->first();
            $data = $request->all();
            if ($request->hasFile('client_signature')) {
                $data['client_signature'] = $this->controller->uploadImage($request->file('client_signature'), 'client/signature/');
            }
            if($agrement == null){
                Agreement::query()->create($data);
            }else{
                $agrement->update($data);
            }

            DB::commit();
            return redirect()->back()->with('successpully client Agreemented Updated');
        }catch(\Throwable $e){
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error','Error Agreementing Client'.$e);
        }
    }
}
