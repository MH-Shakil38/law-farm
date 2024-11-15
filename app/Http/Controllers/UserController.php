<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['users'] = User::query()->latest()->get();
        return view('admin.users.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {

        try{
            DB::beginTransaction();
            $data = $request->validated();
            $data['name'] = $request->input('name');
            $data['email'] = $request->input('email');
            $data['password'] = bcrypt($request->input('password'));
            $data['address'] = $request->input('address');
            $data['phone'] = $request->input('phone');
            $data['role_id'] = $request->input('role_id');
            $data['isActive'] = $request->input('isActive');
            $data['file'] = $this->uploadImage($request->file('file'), 'user/file/');
            $data['image'] = $this->uploadImage($request->file('image'), 'user/image/');
            User::query()->create($data);
            DB::commit();
            return redirect()->back()->with('success', 'Employee created successfully');

        }catch(\Throwable $e){
            dd($e->getMessage(),$e->getCode(),$e->getLine());
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $data['user'] = $user;
        return view('admin.users.create')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        try{
            DB::beginTransaction();
            $data = $request->all();

            if($request->password){
                $data['password'] = bcrypt($request->input('password'));
            }
            if($request->hasFile('file')){
                $data['file'] = $this->uploadImage($request->file('file'), 'user/file/');
            }

            if($request->hasFile('image')){
                $data['image'] = $this->uploadImage($request->file('image'), 'user/image/');
            }
            $user->update($data);

            DB::commit();
            return redirect()->back()->with('success', 'Employee Udpate successfully');

        }catch(\Throwable $e){
            dd($e->getMessage(),$e->getCode(),$e->getLine());
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function changePassword($id){
        $data['user'] = User::query()->findOrFail($id);
        return view('admin.users.change-password')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
