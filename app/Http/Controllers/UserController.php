<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $output = null;
        $resultCode = null;
        exec('ipconfig /all', $output, $resultCode);
        if ($resultCode === 0) {
            $outputString = implode("\n", $output);
            dd($outputString);
            return response()->json([
                'ipconfig_output' => $outputString
            ]);
        }
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
            $data['name'] = $request->input('name');
            $data['email'] = $request->input('email');
            $data['password'] = bcrypt($request->input('password'));
            $data['address'] = $request->input('address');
            $data['phone'] = $request->input('phone');
            $data['role_id'] = $request->input('role_id');
            $data['ip'] = $request->input('ip');
            $data['isActive'] = $request->input('isActive');
            $data['type'] = $request->input('type');
            $data['specialization'] = $request->input('specialization');
            $data['file'] = $this->uploadImage($request->file('file'), 'user/file/');
            $data['image'] = $this->uploadImage($request->file('image'), 'user/image/');
            $store = User::query()->create($data);
            dd($store);
            DB::commit();
            return redirect()->back()->with('success', 'Data Added Successfully');
        } catch (\Throwable $e) {
            dd($e->getMessage(), $e->getCode(), $e->getLine());
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
    public function edit($id)
    {
        $data = $this->service->allUsers();
        $data['user'] = $this->service->getUser($id);
        return view('admin.users.create')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        try {
            DB::beginTransaction();
            $this->service->storeuser($user);
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
