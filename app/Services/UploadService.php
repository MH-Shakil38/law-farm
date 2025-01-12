<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\UpdateClientNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class UploadService
{
    protected $controller;
    public function __construct()
    {
        return $this->controller = new Controller();
    }

    public static function client_image()
    {
        $request = request();
        if ($request->hasFile('image')) {
            $image = self::uploadImage($request->file('image'), 'client/image/');
            return url($image);
        }
    }


    public static function uploadImage($file, $path)
    {
        if ($file != null) {
            $imageName = $path . time() . '.' . $file->getClientOriginalName();
            $file->move(public_path($path), $imageName);
            return $imageName;
        } else {
            return null;
        }
    }



}
