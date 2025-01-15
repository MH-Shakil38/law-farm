<?php

namespace App\Http\Controllers;

use App\Models\CaseType;
use App\Models\Client;
use App\Models\TmpClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TmpClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['clients'] = TmpClient::with('caseType')->get();
        return view('admin.client.entry')->with($data);
    }


    public function aprove($id)
    {
        try{
            DB::beginTransaction();
            $client = TmpClient::query()->findOrFail($id);

            $store = Client::query()->create([
                'name' => $client->name,
                'first_name' => $client->first_name,
                'last_name' => $client->last_name,
                'email' => $client->email,
                'phone' => $client->phone,
                'address' => $client->address,
                'case_type' => $client->case_type,
                'city' => $client->city,
                'state' => $client->state,
                'zip_code' => $client->zip_code,
                'case_details' => $client->case_details,
                'date_of_birth' => $client->date_of_birth,
                'image' => $client->image,
                'direction' => $client->direction,
                'gender' => $client->gender,
                'marrital_status' => $client->marrital_status,
                'status' => 2,
            ]);

            $client->delete();
            DB::commit();
            return redirect()->back()->with('success','Client Aproved');
        }catch(\Throwable $e){
            DB::rollBack();
            dd($e);
        }

    }

   
}
