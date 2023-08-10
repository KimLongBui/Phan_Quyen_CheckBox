<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PhanQuyenController extends Controller
{
    public function PhanQuyen(Request $request, User $user){
        // $users = User::with('permissions')->whereIn('id', [2,3,4,5])->get();
        $users = User::with('permissions')->get();
        // $roles = Role::all();
        // $events = Event::all();
        $permissions = Permission::with('users')->get();
        $permissionUsers = DB::table('permission_user')->get();

        $user->permissions()->sync($request->input('id', []));

        return view('Phan_Quyen', compact('users', 'permissions', 'permissionUsers'));

    }

    public function updateUserPermission(Request $request, User $userId)
    {
        // $user = User::findOrFail($userId);
        // // $methodName = 'permisson_' . $user->id;
        // $selectedPermission = $request->input('permiss

        // // return redirect()->back()->with('success', 'Quyền đã được cập nhật thành công');
        // return view ('updateUserPermission');


    }

        public function edit()
        {
            $user = User::all();
            $permissions = Permission::all();

            return view('Phan_Quyen', compact('user', 'permissions'));
        }

        public function update(Request $request)
        {
            $permissionsData = $request->input('permissions');

            foreach ($permissionsData as $userId => $permissionId) {
                $user = User::find($userId);
                $user->permissions()->sync($permissionId);
            }

            return redirect('Phan_Quyen')->with('success', 'Permissions updated successfully');
        }

        public function search(Request $request)
        {
            $searchTerm = $request->input('search');
            $users = User::where('name', 'like', '%' . $searchTerm . '%')->get();
            $permissions = Permission::all();

            return view('Phan_Quyen', compact('users','permissions'));
        }

}
