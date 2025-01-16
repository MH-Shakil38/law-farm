<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\CaseType;
use App\Models\Client;
use App\Models\User;
use App\Services\ActivityLogService;
use App\Services\ClientService;
use App\Services\MailService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

class BasicController extends Controller
{
    public function website()
    {
        return view('website.website');
    }
    public function dashboard(ClientService $clientService)
    {

        $data['todayClient'] = Client::query()->whereDate('created_at',today())->get();
        $data['todayCase'] = Client::query()->whereDate('hearing_date',today())->get();
        $data['tomorrowCase'] = Client::query()->whereDate('hearing_date',Carbon::tomorrow()->toDateString())->get();
        $data['caseTypes'] = CaseType::getAll();
        $data['clients'] = $clientService->getAll(true);
        $data['onlineUsers'] = User::query()->get();
        // $log_data = activity_data(auth()->user()->name.' Dashboard Inforamtion');
        // ActivityLogService::LogInfo($log_data);
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

    public function clientRegistration(){
        $data['case_types'] = CaseType::query()->get();
        return view('website.client.registration')->with($data);
    }

    public function clientStore(Request $request){
        $request->validate([
            'first_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'alien_number' => 'required',
            'case_type' => 'required',
            'address' => 'required',
        ]);
        try{
            DB::beginTransaction();
            $store = ClientService::tmp_client_store();
            DB::commit();
            return redirect()->back()->with('success','Thank you for submitting the client information! We appreciate your cooperation.');
        }catch(\Throwable $e){
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error', 'Somting Wrong' . $e);
        }
        dd($data);
    }


    public function statusChange(Request $request){
        try {
            DB::beginTransaction();
            $model = 'App\Models\\' . $request->model;
            $record = $model::query()->findOrFail($request->id);
            $record->update(['status'=>$record->status == 1 ? 0 : 1]);
            // ActivityLogService::LogInfo($request->model,['description','Deleted '.$request->model.' Table Record ID No-'.$record->id]);
            DB::commit();
            return redirect()->back()->with('success', 'Status Change Successfully');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Somting Wrong' . $e);
        }
    }
}
