<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\CaseType;
use App\Models\User;

class UserService
{
    protected $controller;
    public function __construct()
    {
        return $this->controller = new Controller();
    }
    public static function allUsers()
    {
        $type = request()->segment(1);
        if ($type == 'lawyer') {
            $data['type'] = 'Lawyer';
            $data['lawyerTypes'] = CaseType::query()->get();
            $data['users'] = User::query()->where('user_type', 3)->get();
        } else {
            $data['type'] = 'Employee';
            $data['users'] = User::query()->where('user_type', 1)->OrWhere('user_type', 2)->get();
        }
        return $data;
    }


    public function getUser($id)
    {
        return User::query()->findOrFail($id);
    }

    public function storeuser($user)
    {
        $request = request();
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
        return $this->type();
    }

    public function type()
    {
        $type = request()->segment(1);
        if ($type == 'lawyer') {
            return 'Lawyer';
        } else
            return 'user';
    }
}
