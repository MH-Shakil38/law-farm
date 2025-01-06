<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\CaseType;
use App\Models\Client;
use App\Models\User;
use App\Services\ActivityLogService;
use App\Services\MailService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class BasicController extends Controller
{
    public function website()
    {
        return view('website.website');
    }
    public function dashboard()
    {
        $response = Http::post('https://api.verizon.com/login', [
            'email' => 'pemalaw5@gmail.com',
            'password' => 'BTenzingL2024@',
        ]);
        if ($response->successful()) {
            $data = $response->json();
            $token = $data['access_token'] ?? null;
            dd($token);
            if ($token) {
                dd($token);
                echo "Token retrieved: $token";
            } else {
                echo "Failed to get a token.";
            }
        } else {
            echo "Authentication failed. Check credentials.";
        }
        $data['todayClient'] = Client::query()->whereDate('created_at',today())->get();
        $data['todayCase'] = Client::query()->whereDate('hearing_date',today())->get();
        $data['tomorrowCase'] = Client::query()->whereDate('hearing_date',Carbon::tomorrow()->toDateString())->get();
        $data['caseTypes'] = CaseType::getAll();
        $data['clients'] = Client::getAll(true);
        $data['onlineUsers'] = User::query()->get();
        ActivityLogService::LogInfo('Dashboard');
        return view('admin.dashboard')->with($data);
    }
    public function deleteRecord(Request $request)
    {
        try {
            DB::beginTransaction();
            $model = 'App\Models\\' . $request->model;
            $record = $model::query()->findOrFail($request->id);
            ActivityLogService::LogInfo($request->model,['description','Deleted '.$request->model.' Table Record ID No-'.$record->id]);
            $record->delete();
            DB::commit();
            return redirect()->back()->with('success', 'Record Delete Successfully');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Somting Wrong' . $e);
        }
    }

    public function logs(ActivityLogService $logService){
        $request = request();
        $data['logs'] = $logService->getLog(false);
        if ($request->ajax()) {
            $data = $logService->ajaxClientInfo($data);
            return response()->json($data);
        }
        return view('admin.log.list')->with($data);
    }

    public function notify(){
        $data['notifications'] = auth()->user()->notifications;
        return view('admin.notification.notify')->with($data);
    }

    public function markAsRead($id){
        if($id){
            // auth()->user()->notifications()->where('id',$id)->markAsRead();
            auth()->user()->notifications()->where('id',$id)->update(['read_at' => now ()]);
            return redirect()->back();
        }
    }
}
