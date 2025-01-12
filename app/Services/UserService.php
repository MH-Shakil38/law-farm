<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\CaseType;
use App\Models\User;

use function PHPSTORM_META\type;

class UserService
{
    protected $controller;
    public function __construct()
    {
        return $this->controller = new Controller();
    }
    public static function allUsers()
    {
        $data['users'] = User::query()->get();
        return $data;
    }


    public function getUser($id)
    {
        $data['lawyerTypes'] = CaseType::query()->get();
        $data['user'] = User::query()->findOrFail($id);
        $data['type'] = $this->type();
        ActivityLogService::LogInfo($data['type'],['description'=> 'Show Edit Page with '.$data['user']->id.'/'.$data['user']->name.' Information']);
        return $data;
    }

    public function store($data){
            $request = request();
            $data = $request->all();
            $data['file'] = $this->controller->uploadImage($request->file('file'), 'user/file/');
            $data['image'] = $this->controller->uploadImage($request->file('image'), 'user/image/');
            $store = User::query()->create($data);
            ActivityLogService::LogInfo('User',['action' => 'create','new' => $store,'description'=>'Create '.$store->name.' Information']);
            return $store;
    }

    public function updateUser($user)
    {
        $request = request();
        $old_data = $user;
        $old = User::query()->findOrFail($user->id);
        $old = json_encode($old);
        // $new = json_encode($request->except('_token'));
        $data = $request->all();
        if ($request->password && $request->password != null) {
            $data['password'] = bcrypt($request->input('password'));
        }else{
            $data['password'] = $user->password;
        }
        if ($request->hasFile('file')) {
            $data['file'] = $this->controller->uploadImage($request->file('file'), 'user/file/');
        }

        if ($request->hasFile('image')) {
            $data['image'] = $this->controller->uploadImage($request->file('image'), 'user/image/');
        }
        $user->update($data);
        ActivityLogService::LogInfo('User',['action' => 'create','new' => $user, 'old'=> $old,'description'=>'Update '.$this->type().', '.$user->name.' Information']);
        return $this->type();
    }


    public function type()
    {
        $type = request()->segment(2);
        if ($type == 'lawyer') {
            return 'Lawyer';
        } else
            return 'user';
    }
}
