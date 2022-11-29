<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Role;


class RoleController extends Controller
{
    public function fetchAll(Request $request){
        $roles = Role::orderBy('roleDescription')->get();
        return $roles;
    }     
    
    public function fetchByID(Request $request, $id){
        $roles = Role::find($id);
        return Response::json($roles, 200);
    }        

    public function register(Request $request){
        $role = Role::create([
            "roleCode"=> $request->roleCode,
            "roleDescription"=> $request->roleDescription,
            "default_access"=> $request->default_access
        ]);
        return response($role,201);
    }
}
