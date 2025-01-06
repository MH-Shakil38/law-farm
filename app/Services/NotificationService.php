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

    public static function client_notification($old, $new,$action)
    {
      // Decode the new and old properties JSON
      $newProperties = json_decode($new, true);
      $oldProperties = json_decode($old, true); // Assuming old_properties exist

      $changedProperties = [];

      if ($newProperties) {
          foreach ($newProperties as $key => $newValue) {
              $oldValue = $oldProperties[$key] ?? null; // Get the old value for comparison
              $hasChanged = $oldValue != $newValue; // Check if the value has changed

              // Add only the changed properties
              if ($hasChanged) {
                  if (is_array($newValue) || is_object($newValue)) {
                      $changedProperties[$key] = json_encode($newValue, JSON_PRETTY_PRINT);
                  } elseif ($key == 'updated_at' || $key == 'created_at') {
                      $changedProperties[$key] = \Carbon\Carbon::parse($newValue)->format('Y-m-d H:i:s');
                  } else {
                      $changedProperties[$key] = $newValue ?? 'N/A';
                  }
              }
          }
      }
      $users = User::query()->where('role_id',1)->get();
    //   Notification::send($users,new UpdateClientNotification($changedProperties));
    // //   new UpdateClientNotification($changedProperties);
    $changedProperties['id'] = $new->id;
    $user =  Auth::user();
    if(isset($changedProperties['hearing_date'])){
        $title = $action.' "'.$new->name .'" Hearing Date And Some Information';
    }else{
        $title = $action.' "'.$new->name.'" Information';
    }
      auth()->user()->notify(new UpdateClientNotification($title,$changedProperties));

      return $changedProperties; // Only return the changed items
    }

}
