<?php

namespace App\Http\Controllers;

use App\Models\CaseType;
use App\Models\Client;
use App\Models\TmpClient;
use App\Services\AppService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TmpClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['clients'] = TmpClient::with('caseType')->where('status',1)->get();
        return view('admin.client.entry')->with($data);
    }

    public function pending(){
        $data['clients'] = TmpClient::where('status', 0)->get();
        return view('admin.client.pending')->with($data);
    }


    public function aprove($id)
    {
        try{
            DB::beginTransaction();
            $client = TmpClient::query()->findOrFail($id);
            AppService::aproveTmpToClientModel($client); //client store form tmp to client model
            $client->delete();
            DB::commit();
            return redirect()->back()->with('success','Client Aproved');
        }catch(\Throwable $e){
            DB::rollBack();
            dd($e);
        }

    }

}
