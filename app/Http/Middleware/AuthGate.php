<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use App\Models\Role;
use Closure;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AuthGate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $user = Auth::user();
        // if ($user) {
        //     $roles = Role::with('permissions')->get();
        //     $permissionArray = [];
        //     foreach ($roles as $role) {
        //         foreach ($role->permissions as $permission) {
        //             $permissionArray[$permission->title][] = $role->id;
        //         }
        //     }
        //     foreach ($permissionArray as $title => $roles) {
        //         Gate::define($title, function (User $user) use ($roles) {
        //             return in_array($user->_id, $roles);
        //         });
        //     }
        // }
        // return $next($request);


        $user = Auth::user();
        if ($user) {
            $permissions = Permission::all();
            foreach ($permissions as $permission) {
                Gate::define($permission->title, function (User $user) use ($permission) {
                    return $user->permissions->contains($permission->id);
                });
            }
        }
        return $next($request);
    }
}
