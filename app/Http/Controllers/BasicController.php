<?php

namespace App\Http\Controllers;

use App\Models\CaseType;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicController extends Controller
{

    public function website()
    {
        return view('website.website');
    }
    public function dashboard()
    {
       
        $data['caseTypes'] = CaseType::getAll();
        $data['clients'] = Client::getAll(false);
        $data['onlineUsers'] = User::query()->get();
        return view('admin.dashboard')->with($data);
    }
    public function deleteRecord(Request $request)
    {
        try {
            DB::beginTransaction();
            $model = 'App\Models\\' . $request->model;
            $reocrd = $model::query()->findOrFail($request->id);
            $reocrd->delete();
            DB::commit();
            return redirect()->back()->with('success', 'Record Delete Successfully');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Somting Wrong' . $e);
        }
    }
}
