<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Permission;


class HomeController extends Controller
{
    public function index(){
        return view ('home');
    }

    public function PhanQuyen( Request $request){
        // $user = auth()->user();
        // $permissions = $request->input('permissions', []);

        // // Import class Permission


        // // Lấy danh sách quyền hiện có
        // $allPermissions = Permission::pluck('name')->toArray();

        // // Lọc ra những quyền thực sự tồn tại
        // $validPermissions = array_intersect($permissions, $allPermissions);

        // $user->syncPermissions($validPermissions);

        // return redirect()->back()->with('success', 'Cập nhật phân quyền thành công.');
    }
}
