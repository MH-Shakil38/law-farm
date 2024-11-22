<?php

namespace App\Http\Controllers;

use App\Http\Requests\HearingStoreRequest;
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
}
