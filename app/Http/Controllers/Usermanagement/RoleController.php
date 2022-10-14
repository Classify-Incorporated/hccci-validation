<?php

namespace App\Http\Controllers\Usermanagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:administrator','permission:change role|change permission']);    
    }

    public function edit(User $user)
    {
        $roles = Role::select('name')->get();

        return view('usermanagement.roles', compact('roles', 'user'));
    }

    public function update(Request $request, User $user)
    {
        $user->syncRoles($request->role);
        
        session()->flash('success', $user->fullName() .' role has been updated successfully.');

        return redirect()->route('user.show', $user);
    }

    public function edit_permissions(User $user)
    {
        $permissions = Permission::select('name')->get();

        return view('usermanagement.permissions', compact('permissions', 'user'));
    }

    public function update_permissions(Request $request, User $user)
    {   
        // dd($user->syncPermissions($request->role));
        $user->givePermissionTo('create document', 'view document');
        // $user->syncPermissions($request->role);

        session()->flash('success', $user->fullName() .' permission has been override.');

        return redirect()->route('user.show', $user);
    }
}
