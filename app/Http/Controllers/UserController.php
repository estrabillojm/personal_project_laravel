<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function fetchAllUsers(Request $request) {
        return "fetch all users";
    }

    public function fetchByID(Request $request){
        return "fetch user by id";
    }

    public function register(Request $request){

        $user = User::create([
            "firstName"=> $request->firstName,
            "middleName"=> $request->middleName,
            "lastName"=> $request->lastName,
            "fullName"=> $request->fullName,
            "roleId"=> $request->roleId,
            "user_profile_id" => null
        ]);
        return $user;
    }

}
