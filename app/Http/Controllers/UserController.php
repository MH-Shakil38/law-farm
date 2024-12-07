<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $service;
    public function __construct(UserService $service)
    {
        return $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->allUsers();
        return view('admin.users.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = $this->service->allUsers();
        return view('admin.users.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->validated();
            $this->service->store($data);
            DB::commit();
            if($request->user_type == '3'){
                return redirect()->route('lawyer.index')->with('success','Lawyer successfully Added');
            }
            return redirect()->back()->with('success', 'Data Added Successfully');
        } catch (\Throwable $e) {
            dd($e->getMessage(), $e->getCode(), $e->getLine());
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function activeUser()
    {
        return view('admin.users.active-list');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $data = $this->service->allUsers();
        $data = $this->service->getUser($id);
        return view('admin.users.create')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        try {
            DB::beginTransaction();
            $this->service->updateUser($user);
            DB::commit();
            if ($request->user_type == 3) {
                return redirect()->route('lawyer.index')->with('success', 'Lawyer Udpate successfully');
            } else {
                return redirect()->route('users.index')->with('success', 'User Udpate successfully');
            }
        } catch (\Throwable $e) {
            dd($e->getMessage(), $e->getCode(), $e->getLine());
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function changePassword($id)
    {
        $data['user'] = $this->service->getUser($id);
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
