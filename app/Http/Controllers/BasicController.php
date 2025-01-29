<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\Entry\ClientEntryRequest;
use App\Models\ActivityLog;
use App\Models\CaseType;
use App\Models\Client;
use App\Models\User;
use App\Services\ActivityLogService;
use App\Services\AppService;
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

    /**
     * method for frontend
     */
    public function website()
    {
        return view('website.website');
    }


    /**
     * method for Admin Dashboard
     */
    public function dashboard(ClientService $clientService)
    {
        $data = AppService::dashboardData();
        return view('admin.dashboard')->with($data);
    }

    /**
     * request pass Model and record id
     * Delete for All Model Record
     */
    public function deleteRecord(Request $request)
    {
        try {
            DB::beginTransaction();
            AppService::delete();
            DB::commit();
            return redirect()->back()->with('success', 'Record Delete Successfully');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Somting Wrong' . $e);
        }
    }

      /**
     * All Activities log information
     */
    public function logs(ActivityLogService $logService){
        $data = AppService::logs();
        return view('admin.log.list')->with($data);
    }


      /**
     * show all notification for admin
     */
    public function notify(){
        $data['notifications'] = auth()->user()->notifications;
        return view('admin.notification.notify')->with($data);
    }


      /**
     * Notification MarkasRead
     */
    public function markAsRead($id){
        if($id){
            // auth()->user()->notifications()->where('id',$id)->markAsRead();
            auth()->user()->notifications()->where('id',$id)->update(['read_at' => now ()]);
            return redirect()->back();
        }
    }

      /**
     * client entry form
     */
    public function clientRegistration(){
        $data['case_types'] = CaseType::query()->get();
        return view('website.client.registration')->with($data);
    }

    public function clientStore(ClientEntryRequest $request){
        try{
            DB::beginTransaction();
            $store = ClientService::tmp_client_store();
            // dd($store);
            DB::commit();
            return redirect()->back()->with('success','Thank you for submitting the client information! We appreciate your cooperation.');
        }catch(\Throwable $e){
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error', 'Somting Wrong' . $e);
        }
    }


    public function statusChange(Request $request){
        try {
            DB::beginTransaction();
            AppService::changeStatus();
            DB::commit();
            return redirect()->back()->with('success', 'Status Change Successfully');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Somting Wrong' . $e);
        }
    }
}
