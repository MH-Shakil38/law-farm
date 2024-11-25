<?php

namespace App\Http\Controllers;

use App\Http\Requests\HearingStoreRequest;
use App\Models\Client;
use App\Models\Hearing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaseController extends Controller
{
    public function hearingDate (HearingStoreRequest $request){
        $data = $request->validated();
        try{
            DB::beginTransaction();
            $hearing = Hearing::query()->create($data);
            DB::commit();
            return redirect()->back()->with('success','Next Hearing Date Added');
        }catch(\Throwable $e){
            DB::rollBack();
            $this->errorDD($e);
            return redirect()->back()->with('error','Somting Wrong',$e);
        }

    }

    public function hearingEdit($id){
        $data['hearing'] = Hearing::query()->findOrFail($id);
        $data['client'] = Client::query()->where('id',$data['hearing']->client_id)->first();
        return view('admin.client.details')->with($data);
    }

    public function hearingUpdate(Request $request,$id){
        $data = $request->all();
        try{
            DB::beginTransaction();
            $hearing = Hearing::query()->findOrFail($id);
            $hearing->update($data);
            DB::commit();
            return redirect()->route('clients.show',$hearing->client_id)->with('success','Hearing History Update');
        }catch(\Throwable $e){
            DB::rollBack();
            $this->errorDD($e);
            return redirect()->back()->with('error','Somting Wrong',$e);
        }
    }
}
