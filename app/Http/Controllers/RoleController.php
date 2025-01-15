<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Route;

class RoleController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

        //  $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
        //  $this->middleware('permission:role-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:role-delete', ['only' => ['destroy']]);

    }


    public function index(Request $request)

    {
        $data['roles'] = Role::query()->get();
        $data['permissions'] = Permission::get()->groupBy('prefix');
        return view('admin.RolePermission.role.index')->with($data);

    }



    public function create(): View

    {
        $permission = Permission::get();
        return view('roles.create',compact('permission'));

    }

    public function store(Request $request): RedirectResponse
    {

        try{
            DB::beginTransaction();
            $request->validate([
                'name' => 'required|unique:roles',
                'permissions' => 'required|array',
            ]);

            $role = Role::create([
                'name' => $request->name,
            ]);
            $role->permissions()->attach($request->permissions);
            DB::commit();
            return redirect()->route('roles.index')->with('success','Role created successfully');
        }catch(\Throwable $e){
            DB::rollBack();
            dd($e);
        }



    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $rolePermissions = $role->permissions->pluck('id')->toArray();

        return view('roles.edit', compact('role', 'permissions', 'rolePermissions'));
    }

    // Update the specified role in the database
    public function update(Request $request, $id)
    {

        try{
            DB::beginTransaction();
            $request->validate([
                'name' => 'required|unique:roles,name,' . $id,
                'permissions' => 'required|array',
            ]);

            $role = Role::findOrFail($id);
            $role->update([
                'name' => $request->name,
            ]);
            $role->permissions()->sync($request->permissions);
            DB::commit();
            return redirect()->back()->with('success','successfully role updated');

        }catch(\Throwable $e){
            DB::rollBack();
            dd($e);
        }

    }

    // Assign a role to a user
    public function assignRoleToUser(Request $request, $userId)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::findOrFail($userId);
        $user->roles()->attach($request->role_id);

        return redirect()->route('users.show', $userId)->with('success', 'Role assigned successfully!');
    }

    // Remove a role from a user
    public function removeRoleFromUser($userId, $roleId)
    {
        $user = User::findOrFail($userId);
        $user->roles()->detach($roleId);

        return redirect()->route('users.show', $userId)->with('success', 'Role removed successfully!');
    }

    // Remove the specified role from the database
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->permissions()->detach(); // Detach any associated permissions
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully!');
    }

}
