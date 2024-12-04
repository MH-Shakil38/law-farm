<?php

namespace App\Http\Controllers;

use App\Models\CaseType;
use App\Models\Client;
use App\Models\User;
use Carbon\Carbon;
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
        $data['todayClient'] = Client::query()->whereDate('created_at',today())->get();
        $data['todayCase'] = Client::query()->whereDate('hearing_date',today())->get();
        $data['tomorrowCase'] = Client::query()->whereDate('hearing_date',Carbon::tomorrow()->toDateString())->get();
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
