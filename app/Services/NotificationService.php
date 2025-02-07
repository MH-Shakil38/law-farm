<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\UpdateClientNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class NotificationService
{
    protected $controller;
    public function __construct()
    {
        return $this->controller = new Controller();
    }

    public static function client_notification($old = null, $new = null,$action = 'Access')
    {

        $changedProperties  = change_value($old,$new,$action);
        $user               = auth()->user();
        $title              = ' A New Client Information';
        $url                = route('clients.show',$new->id);
        $data               = activity_data($title,$changedProperties,$url,'Added');

        ActivityLogService::LogInfo($data);
        MailService::newClientMail($title,$changedProperties);
        //   Notification::send($users,new UpdateClientNotification($changedProperties));
        //   new UpdateClientNotification($changedProperties);
        auth()->user()->notify(new UpdateClientNotification($title,$changedProperties,$action));
        return $changedProperties; // Only return the changed items
    }

    public static function client_update_notification($old = null, $new = null,$action = 'Access')
    {
      $changedProperties =  change_value($old,$new,$action);
        if(isset($changedProperties['hearing_date'])){
            $title = $new->name .'" Hearing Date And Some Information';
        }else{
            $title = $new->name.'" Information';
        }
        $data = [
            'url' =>'',
            'title' =>$title,
            'data' =>$changedProperties,
            'action' => isset($action),
        ];
        ActivityLogService::LogInfo('Client', ['action' => 'create', 'new' => $store, 'description' => 'Create ' . 'Client , ' . $store->name . ' Information']);
        MailService::newClientMail($title,$changedProperties);
        //   Notification::send($users,new UpdateClientNotification($changedProperties));
        //   new UpdateClientNotification($changedProperties);
        auth()->user()->notify(new UpdateClientNotification($title,$changedProperties));
        return $changedProperties; // Only return the changed items
    }


    public static function tmp_client_notification($old = null, $new = null,$action = 'Access')
    {

        $changedProperties  = change_value($old,$new,$action);
        $title              = 'Entry New Client Information';
        $url                = route('clients.entry');
        $data               = activity_data($title,$changedProperties,$url,$action);

        ActivityLogService::LogInfo($data);
        MailService::newClientMail($title,$changedProperties);

        $superAdmins = get_super_admin();

        foreach ($superAdmins as $admin) {
            $admin->notify(new UpdateClientNotification($title, $changedProperties, $action));
            info('Notification ID '.$admin->id);
        }
        return $changedProperties; // Only return the changed items
    }


}
